<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Event');
        $all_event = $repository->loadAllPublishedEvent();
        if($all_event != null){
          return $this->render('base.html.twig',array('all_event' =>$all_event));
        }
        else{
          return $this->render('base.html.twig',array('empty' => true));
        }
    }
}
