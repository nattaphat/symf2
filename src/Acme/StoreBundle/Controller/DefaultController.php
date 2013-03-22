<?php

namespace Acme\StoreBundle\Controller;

use Acme\StoreBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function createAction()
    {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');
    
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
    
        return new Response('Created product id '.$product->getId());
    }
    
    public function showAction($id)
    {
        $product = $this->getDoctrine()
        ->getRepository('AcmeStoreBundle:Product')
        ->find($id);
    
        if (!$product) {
            throw $this->createNotFoundException(
                    'No product found for id '.$id
            );
        }
    
        // ... do something, like pass the $product object into a template
        return new Response('Product id will show is:'.$product->getName());
    }
}
