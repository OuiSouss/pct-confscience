<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackofficeController extends Controller{
	
	/**
	* @Route("/back-office", name="back-office")
	*/
	public function indexAction(){
		return $this->render('backoffice.html.twig');
	}
}
