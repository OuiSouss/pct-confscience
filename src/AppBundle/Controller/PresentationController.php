<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PresentationController extends Controller{

    /**
    * @Route("qui-sommes-nous", name="presentation")
    */
    public function indexAction(){
    	return new Response('<html><h1> A remplir par le back office </h1></html>');
    }
}
