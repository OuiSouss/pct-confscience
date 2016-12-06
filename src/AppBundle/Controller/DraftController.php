<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use AppBundle\Entity\Event;

class DraftController extends Controller
{
  /**
   * @Route("/draft", name="draft_index")
   */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Event');
        $user = $this->get('security.token_storage')->getToken()->getUser();//Récupération de l'utilisateur courant
        /*Listing des evenements en mode draft*/
        $listDraftEvents = $repository->loadAllDraftUser($user);

        if($listDraftEvents == null)
          return $this->render('draft/index.html.twig',array('empty'=>true));// Créer la vue d'indexation des drafts
        return $this->render('draft/index.html.twig',array('all_draft'=>$listDraftEvents));
    }

    /**
    * @Route("/draft/publish/{id}", name="draft_publish")
    */
    public function publishDraft($id){

      $repository_event = $this->getDoctrine()->getRepository('AppBundle:Event');
      $draft = $repository_event->find($id);
      if($draft == null){
        throw $this->createNotFoundException('L\'evenement demandé n\'existe pas');
      }

      if(!$draft->getPublished()){
        $draft->setPublished(true);
      }

      $em = $this->getDoctrine()->getManager();
      $em->persist($draft);
      $em->flush();

      return $this->redirectToRoute('draft_index');
    }

    /**
    * @Route("/draft/modify/{id}", name="draft_modify")
    */
    public function modifyDraftAction($id,Request $request){
      $draft = $this->getDoctrine()->getRepository('AppBundle:Event')->find($id);
      $event = new Event();
      if($draft != null)
      {
        if(!$draft->getPublished()){
          $form = $this->createFormBuilder($event)
            ->add('titre', TextType::class, array('data'=>$draft->getTitre()))
            ->add('date', DateType::class, array('data'=>$draft->getDate()))
            ->add('image', FileType::class, array('required' => false, 'label' => 'Charger une image'))
            ->add('description', TextareaType::class, array('label' => 'Description', 'data' => $draft->getDescription()))
            ->add('published', CheckboxType::class, array('required' => false, 'label' => 'Publier'))
            ->add('save', SubmitType::class, array('label' => 'Modifier'))
            ->getForm();

          $form->handleRequest($request);

          if($form->isSubmitted() && $form->isValid()){
      			$event = $form->getData();

      			$event->setUser($this->get('security.token_storage')->getToken()->getUser());
      			// Base de données en attente...
      			 /** @var Symfony\Component\HttpFoundation\File\UploadedFile $image */
      			$image = $event->getImage();

            if($image != null){
      			     $fileName = md5(uniqid()).'.'.$image->guessExtension();

      			        $image->move(
                      $this->getParameter('upload_images_directory'),
                      $fileName
                  );

      			    $event->setImage($fileName);
            }

            else{
              $event->setImage($draft->getImage());
            }
      			$em = $this->getDoctrine()->getManager();
            $em->remove($draft);
      			$em->persist($event);
      			$em->flush();

      			return $this->redirectToRoute('draft_index');
          }
        }
      }
  		return $this->render('draft/modify.html.twig', array('form' => $form->createView(),));
    }

    /**
    * @Route("/draft/remove/{id}", name="remove_draft")
    */
    public function removeDraftAction($id){
      $draft = $this->getDoctrine()->getRepository('AppBundle:Event')->find($id);

      if($draft == null){
        throw $this->createNotFoundException('L\'evenement demandé n\'existe pas');
      }

      if(!$draft->getPublished()){
        $em = $this->getDoctrine()->getManager();
        $em->remove($draft);
        $em->flush();
      }
      return $this->redirectToRoute('draft_index');//Redirection vers la page d'acceuil du mode draft (Provoque une maj de l'indexation)


    }

    /**
    * @Route("draft/unpublished/{id}", name="unpublised_event")
    */
    public function unpublishedAction($id){
      $draft = $this->getDoctrine()->getRepository('AppBundle:Event')->find($id);

      if($draft == null){
        throw $this->createNotFoundException('L\'evenement demandé n\'existe pas');
      }

      if($draft->getPublished()){
        $em = $this->getDoctrine()->getManager();
        $draft->setPublished(false);
        $em->persist($draft);
        $em->flush();
      }
      return $this->redirectToRoute('draft_index');//Redirection vers la page d'acceuil du mode draft (Provoque une maj de l'indexation)

    }

}

?>
