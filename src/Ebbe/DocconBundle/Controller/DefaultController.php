<?php

namespace Ebbe\DocconBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EbbeDocconBundle:Default:index.html.twig', array('name' => $name));
    }
}
