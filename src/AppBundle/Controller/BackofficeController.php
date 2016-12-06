<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use AppBundle\Entity\Event;
use AppBundle\Entity\User;
use AppBundle\Repository\EventRepository;

class BackofficeController extends Controller{

	/**
	* @Route("/back-office", name="back-office")
	*/
	public function indexAction(){
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$repository = $this->getDoctrine()->getRepository('AppBundle:Event');
		$all_event = $repository->findBy(array('user' => $user,'published' => true));
		if($all_event != null){
			return $this->render('backoffice.html.twig',array('all_event' =>$all_event));
		}
		else{
			return $this->render('backoffice.html.twig', array('empty' => true));
		}
	}

	/**
	* @Route("/back-office/creation-evenement", name="creation-evenement")
	*/
	public function newAction(Request $request){
		$event = new Event();

		$form = $this->createFormBuilder($event)
			->add('titre', TextType::class)
			->add('date', DateType::class)
			->add('image', FileType::class, array('required' => false, 'label' => 'Charger l\'image '))
			->add('description', TextareaType::class, array('label' => 'Description'))
			->add('published', CheckboxType::class, array('required' => false, 'label' => 'Publier'))
			->add('save', SubmitType::class, array('label' => 'Créer évènement'))
			->getForm();

		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid()){
			$event = $form->getData();

			$event->setUser($this->get('security.token_storage')->getToken()->getUser());
			// Base de données en attente...
			 /** @var Symfony\Component\HttpFoundation\File\UploadedFile $image */
			$image = $event->getImage();

			$fileName = md5(uniqid()).'.'.$image->guessExtension();

			$image->move(
                $this->getParameter('upload_images_directory'),
                $fileName
            );

			$event->setImage($fileName);

			$em = $this->getDoctrine()->getManager();
			$em->persist($event);
			$em->flush();

			return $this->redirectToRoute('back-office');
		}

		return $this->render('backoffice/new.html.twig', array('form' => $form->createView(),));
	}
	/*
	public function editAction(Request $request){
	}
	*/

	/**
	* @Route("/back-office/remove/{id}", name="remove-event")
	**/
	public function deleteAction($id){
		$user = $this->get('security.token_storage')->getToken()->getUser();
		$repository_event = $this->getDoctrine()->getRepository('AppBundle:Event');
		$event = $repository_event->find($id);
		$em = $this->getDoctrine()->getManager();
		if($event != null)
		{
			if($user == $event->getUser())
			{
				$em->remove($event);
				$em->flush();
				return $this->redirectToRoute('back-office');
			}
		}
		throw $this->createNotFoundException('L\'evenement demandé n\'existe pas');

	}
}
