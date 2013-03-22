<?php

namespace CUSE\PrivayRepoCentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/*
Common services you might need:
	$request = $this->getRequest();

	$templating = $this->get('templating');

	$router = $this->get('router');

	$mailer = $this->get('mailer');

List all available services:
	$ php app/console container:debug

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
		
		$product = 'a';
		    if (!$product) {
		        throw $this->createNotFoundException('The product does not exist');
		    }

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
	
	public function sess(){
		
		$session = $this->getRequest()->getSession();

		// store an attribute for reuse during a later user request
		$session->set('foo', 'bar');

		// in another controller for another request
		$foo = $session->get('foo');

		// use a default value if the key doesn't exist
		$filters = $session->get('filters', array());
	}
	
	public function formAction(Request $request){
		// $form = $this->createForm();
		// $form->bind($request);
		// // ...
	}
	
	public function flashMesgAction()
	{
	    // $form = $this->createForm(...);
	    // 
	    // $form->bind($this->getRequest());
	    // if ($form->isValid()) {
	    //     // do some sort of processing
	    // 
	    //     $this->get('session')->getFlashBag()->add('notice', 'Your changes were saved!');
	    // 
	    //     return $this->redirect($this->generateUrl(...));
	    // }
	    // 
	    // return $this->render(...);
	
		//for twig
		// {% for flashMessage in app.session.flashbag.get('notice') %}
		//     <div class="flash-notice">
		//         {{ flashMessage }}
		//     </div>
		// {% endfor %}
	}
	
	public function setJson(){
		// create a simple Response with a 200 status code (the default)
		$response = new Response('Hello '.$name, 200);

		// create a JSON-response with a 200 status code
		$response = new Response(json_encode(array('name' => $name)));
		$response->headers->set('Content-Type', 'application/json');
		
		//or
		
		$response = new JsonResponse();
		$response->setData(array(
		    'data' => 123
		));
	}
	
	public function theRequest(Request $request){
		$request = $this->getRequest();

		$request->isXmlHttpRequest(); // is it an Ajax request?

		$request->getPreferredLanguage(array('en', 'fr'));

		$request->query->get('page'); // get a $_GET parameter

		$request->request->get('page'); // get a $_POST parameter
	}
	
}//end clsss
