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
        
//         // query by the primary key (usually "id")
//         $product = $repository->find($id);
        
//         // dynamic method names to find based on a column value
//         $product = $repository->findOneById($id);
//         $product = $repository->findOneByName('foo');
        
//         // find *all* products
//         $products = $repository->findAll();
        
//         // find a group of products based on an arbitrary column value
//         $products = $repository->findByPrice(19.99);
        
//         // query for one product matching be name and price
//         $product = $repository->findOneBy(array('name' => 'foo', 'price' => 19.99));
        
//         // query for all products matching the name, ordered by price
//         $product = $repository->findBy(
//                 array('name' => 'foo'),
//                 array('price' => 'ASC')
//         );
        
        // ... do something, like pass the $product object into a template
        return new Response('Product id will show is:'.$product->getName());
    }
    
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);
    
        if (!$product) {
            throw $this->createNotFoundException(
                    'No product found for id '.$id
            );
        }
    
        $product->setName('New product name!');
        $em->flush();
        
//for delete
//         $em->remove($product);
//         $em->flush();

//Querying for Objects with DQL
//         $em = $this->getDoctrine()->getManager();
//         $query = $em->createQuery(
//                 'SELECT p FROM AcmeStoreBundle:Product p WHERE p.price > :price ORDER BY p.price ASC'
//         )->setParameter('price', '19.99');

//  The getResult() method returns an array of results. If you're querying for just one object, you can use the getSingleResult() method instead:      
//         $products = $query->getResult();

//method throws
//         $query = $em->createQuery('SELECT ...')
//         ->setMaxResults(1);
        
//         try {
//             $product = $query->getSingleResult();
//         } catch (\Doctrine\Orm\NoResultException $e) {
//             $product = null;
//         }

//  Using Doctrine's Query Builder      
//         $repository = $this->getDoctrine()
//         ->getRepository('AcmeStoreBundle:Product');
        
//         $query = $repository->createQueryBuilder('p')
//         ->where('p.price > :price')
//         ->setParameter('price', '19.99')
//         ->orderBy('p.price', 'ASC')
//         ->getQuery();
        
//         $products = $query->getResult();
        
        return new Response('Product id will show is:'.$product->getName());
        //return $this->redirect($this->generateUrl('homepage'));
    }
}
