<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller{

		/**
		* @Route("/admin", name="admin")
		*/
    public function loginAction(){
    	return new Response('<html><h1> Gestion du forum : Amélie');
    }
}
