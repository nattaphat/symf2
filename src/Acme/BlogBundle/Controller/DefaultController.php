<?php
// src/Acme/BlogBundle/Controller/Defaultcontroller.php
namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\BlogBundle\Entity\Author;

class DefaultController extends Controller
{
//     public function indexAction($name)
//     {
//         return $this->render('AcmeBlogBundle:Default:index.html.twig', array('name' => $name));
//     }

    public function indexAction()
    {
        $author = new Author();
        // ... do something to the $author object
    
        $validator = $this->get('validator');
        $errors = $validator->validate($author);
        
        //for validate group
        //$errors = $validator->validate($author, array('registration'));
        if (count($errors) > 0) {
            //return new Response(var_dump($errors, true));
            return $this->render('AcmeBlogBundle:Author:validate.html.twig', array(
                    'errors' => $errors,
            ));
        } else {
            return new Response('The author is valid! Yes!');
        }
    }
    
  
}
