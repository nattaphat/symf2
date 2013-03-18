<?php

namespace CUSE\PrivayRepoCentalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CUSEPrivayRepoCentalBundle:Default:index.html.twig', array('name' => $name));
    }
}
