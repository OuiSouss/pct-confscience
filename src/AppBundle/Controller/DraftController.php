<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DraftController extends Controller
{
  /**
   * @Route("/draft/{u}", name="draft_home_page")
   */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Draft');
        $user = $this->get('security.context')->getToken()->getUser();//Récupération de l'utilisateur courant
        /*Listing des evenements en mode draft*/
        $listDraftEvents = $repository->findBy(array('user'=>$user));
        foreach ($listDraftEvent as $draft){
          echo $draft->getContent();//Récupération des evenements marqué comme draft
        }

        return $this->render('draft/index.html.twig');//TODO: Créer la vue d'indexation des drafts
    }

    /**
    * @Route("/publish-draft, name="draft_publish")
    */
    public function publishDraft(Request $request){
      $id_draft = $request->attributes->get('id_draft');
      $draft = getDraft($id_draft);

      if($draft == null){
        $response = new Response();
        $response->setContent("Error 404");//TODO: Associé une vue à une erreur 404
        $response->setStatusCode(Response::HTTP_NOT_FOUND);
        return $response;
      }

      $event = $draft->getEvent();

      $event->Published();//TODO: Modifier en fonction de l'entité Event

      $em->remove($draft);
      $em->flush();

      return $this->redirectToRoute('draft_home_page');
    }


    //A implementer dans la EventController
  /*  public function addDraftAction(User $u, Event $event){
      $draft = new Draft();
      $draft->setUser($u);
      $draft->setEvent($event);

      $em = $this->getDoctine()->getManager();

      $em->persist($draft);
      $em->flush();
    }*/

    /**
    * @Route("/remove-draft, name="draft_remover")
    */
    public function removeDraftAction(Request $request){
      $draft = $this->getDraft($request->attributes->get($id_draft));

      if($draft != null){
        $em = $this->getDoctrine()->getManager();
        $em->remove($draft);
        $em->flush()
      }

      return $this->redirectToRoute('draft_home_page');//Redirection vers la page d'acceuil du mode draft (Provoque une maj de l'indexation)


    }

    private function getDraft($id){
      $em = $this->getDoctrine()->getManager();
      $repository = $em->getRepository('AppBundle:Draft');

      $draft = $repository->find($id);

      return $draft;
    }

}

?>
