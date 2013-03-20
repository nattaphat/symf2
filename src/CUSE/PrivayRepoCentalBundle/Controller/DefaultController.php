<?php

namespace CUSE\PrivayRepoCentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/*
Common services you might need:
	$request = $this->getRequest();

	$templating = $this->get('templating');

	$router = $this->get('router');

	$mailer = $this->get('mailer');

*/
class DefaultController extends Controller
{
    public function indexAction($name)
    {
		// $templating = $this->get('templating');
		// $content = $templating->render(
		//     'CUSEPrivayRepoCentalBundle:Default:index.html.twig',
		//     array('name' => $name)
		// );
		
		// $templating->render(
		//     'AcmeHelloBundle:Hello/Greetings:index.html.twig',
		//     array('name' => $name)
		// );
		// // index.html.twig found in Resources/views/Hello/Greetings is rendered.
		
        return $this->render('CUSEPrivayRepoCentalBundle:Default:index.html.twig', array('name' => $name));
    }

	public function testAction($param,$param2,$color,$foo='bar'){
		return new Response('<html><body>Hello <font color="'.$color.'">'.$param.'-'.$param2.'!</font></body></html>');
	}
	
	public function redirectAction(){
		//By default, the redirect() method performs a 302 (temporary) redirect. 
		//To perform a 301 (permanent) redirect, modify the second argument:
		return $this->redirect($this->generateUrl('homepage'),301);
	}
	
	public function preforwardAction($name){
		$response = $this->forward('CUSEPrivayRepoCentalBundle:Default:forward', array(
		        'name'  => $name,
		        'color' => 'green',
		    ));

	    // ... further modify the response or return it directly

	    return $response;
	}
	
	public function preforward2Action($name){
		$httpKernel = $this->container->get('http_kernel');
		$response = $httpKernel->forward(
		    'CUSEPrivayRepoCentalBundle:Default:forward',
		    array(
		        'name'  => $name,
		        'color' => 'green',
		    )
		);
		return $response;
	}
	
	public function forwardAction($name,$color){
		return new Response('<html><body>Hello <font color="'.$color.'">'.$name.'!</font></body></html>');
	}
	public function formAction(Request $request){
		// $form = $this->createForm();
		// $form->bind($request);
		// // ...
	}
}
