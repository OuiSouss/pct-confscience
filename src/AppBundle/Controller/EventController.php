<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Event;

class EventController extends Controller{

	/**
	* @Route("evenement/{id}", name="event")
	*/
	public function displayAction($id){
		$repository = $this->getDoctrine()->getManager()->getRepository('AppBundle:Event');
		$res = $repository->find($id);

		if($res != null){
			if($res->getPublished()){
				return $this->render('event.html.twig',array('result'=>$res));
			}
		}

		throw $this->createNotFoundException('L\'evenement demandé n\'existe pas');
	}
}
