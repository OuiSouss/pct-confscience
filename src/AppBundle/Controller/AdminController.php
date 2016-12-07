<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller{

		/**
		* @Route("/admin", name="admin")
		*/
    public function adminAction(){
    	return new Response('<html><h1> Gestion du forum : Amélie');
    }
}
