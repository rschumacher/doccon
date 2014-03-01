<?php

namespace Ebbe\FileRepositoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EbbeFileRepositoryBundle:Default:index.html.twig', array('name' => $name));
    }
}
