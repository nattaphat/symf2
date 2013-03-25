<?php
// src/Acme/StoreBundle/Controller/DefaultController.php
namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Category;
use Acme\StoreBundle\Entity\Product;
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
		
		// //example to use Repository
		// // query for one product matching be name and price
		// $product = $repository->findOneBy(array('name' => 'foo', 'price' => 19.99));
		// 
		// // query for all products matching the name, ordered by price
		// $product = $repository->findBy(
		//     array('name' => 'foo'),
		//     array('price' => 'ASC')
		// );
		
		// // query by the primary key (usually "id")
		// $product = $repository->find($id);
		// 
		// // dynamic method names to find based on a column value
		// $product = $repository->findOneById($id);
		// $product = $repository->findOneByName('foo');
		// 
		// // find *all* products
		// $products = $repository->findAll();
		// 
		// // find a group of products based on an arbitrary column value
		// $products = $repository->findByPrice(19.99);
		
	   return new Response('Created product id '.$product->getName());
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
		return new Response('Created product id '.$product->getName());
	    //return $this->redirect($this->generateUrl('homepage'));
	}
	
	public function removeAction($id)
	{
	    $em = $this->getDoctrine()->getManager();
	    $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);

	    if (!$product) {
	        throw $this->createNotFoundException(
	            'No product found for id '.$id
	        );
	    }

	    $em->remove($product);
		$em->flush();
		
		return new Response('Removed !');
	    //return $this->redirect($this->generateUrl('homepage'));
	}
	
	public function queryDqlAction()
	{
	    $em = $this->getDoctrine()->getManager();
		
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
		    'SELECT p FROM AcmeStoreBundle:Product p WHERE p.price >= :price ORDER BY p.price ASC'
		)->setParameter('price', '19.99');
		
		// //another way
		// ->setParameters(array(
		//     'price' => '19.99',
		//     'name'  => 'Foo',
		// ))
		
		// $query = $em->createQuery('SELECT ...')
		//     ->setMaxResults(1);

		try {
		    //return array
			$products = $query->getResult();

			//return one result
			$product = $query->getSingleResult();
		} catch (\Doctrine\Orm\NoResultException $e) {
		    $product = null;
		}
		
		
		
		//return new Response(var_dump($products));
		return new Response('Created product id '.$product->getName());

	}
	
	public function queryBuilderAction()
	{
		$repository = $this->getDoctrine()
		    ->getRepository('AcmeStoreBundle:Product');

		$query = $repository->createQueryBuilder('p')
		    ->where('p.price >= :price')
		    ->setParameter('price', '19.99')
			->setMaxResults(2) //same set limit
		    ->orderBy('p.price', 'ASC')
		    ->getQuery();
		
		try {
		    //return array
			$products = $query->getResult();
		} catch (\Doctrine\Orm\NoResultException $e) {
		    $product = null;
		}
		
		return new Response(var_dump($products));
		//return new Response('Created product id '.$product->getName());

	}
	
	//Relation of these function is one2many product and category
	public function createProductAction()
    {
        $category = new Category();
        $category->setName('Main Products');

        $product = new Product();
        $product->setName('Foo');
        $product->setPrice(29.99);
		$product->setDescription("Set up Relation");
        // relate this product to the category
        $product->setCategory($category);

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($product);
        $em->flush();

        return new Response(
            'Created product id: '.$product->getId().' and category id: '.$category->getId()
        );
    }

	//show product with relate category
	public function showProCatAction($id)
	{
	    $product = $this->getDoctrine()
	        ->getRepository('AcmeStoreBundle:Product')
	        ->find($id);

		if (!$product) {
	        throw $this->createNotFoundException(
	            'No product found for id '.$id
	        );
	    }
	
	    $categoryName = $product->getCategory()->getName();
	
		if (!$categoryName) {
	        throw $this->createNotFoundException(
	            'No category found with product id'.$id
	        );
	    }
	
	    return new Response(
            'Created product id: '.$product->getId().' and category Name: '.$categoryName
        );
	}
	
	//show category of product
	public function showCatProAction($id)
	{
	    $category = $this->getDoctrine()
	        ->getRepository('AcmeStoreBundle:Category')
	        ->find($id);
	
		if (!$category) {
	        throw $this->createNotFoundException(
	            'No category found for id '.$id
	        );
	    }
	
	    $products = $category->getProducts();
	
		return new Response(
            var_dump($products)
        );
	}
	
	//call that repository 
	public function showByRepositoryAction($id)
	{
	    $product = $this->getDoctrine()
	    ->getRepository('AcmeStoreBundle:Product')
	    ->findByAllOrderedByName();
	
	    $category = $product->getCategory();
	
	    // ...
	    return new Response(
	            'Created product id: '.$product->getId().' and category Name: '.$categoryName
	    );
	}
	
}// end class
