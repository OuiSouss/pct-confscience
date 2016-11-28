<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Entity\Event;


class BackofficeController extends Controller{
	
	/**
	* @Route("/back-office", name="back-office")
	*/
	public function indexAction(){
		return $this->render('backoffice.html.twig');
	}
	
	/**
	* @Route("/back-office/creation-evenement", name="creation-evenement")
	*/
	public function newAction(Request $request){
		$event = new Event();
		
		$form = $this->createFormBuilder($event)
			->add('titre', TextType::class)
			->add('date', DateType::class)
			->add('image', TextType::class, array('required' => false))
			->add('uploadImage', SubmitType::class, array('label' => 'Charger l\'image'))
			->add('description', TextType::class)
			->add('save', SubmitType::class, array('label' => 'Créer évènement'))
			->add('draft', SubmitType::class, array('label' => 'Sauvegarder brouillon'))
			->getForm();
		
		$form->handleRequest($request);
		
		if($form->isSubmitted() && $form->isValid()){
			$event = $form->getData();
			
			/* Base de données en attente...
			$em = $this->getDoctrine()->getManager();
			$em->persist($event);
			$em->flush();
			*/
			
			return $this->redirectToRoute('homepage');
		}
		
		return $this->render('backoffice/new.html.twig', array('form' => $form->createView(),));
	}
	/*
	public function editAction(Request $request){
	}		
	*/		
}
