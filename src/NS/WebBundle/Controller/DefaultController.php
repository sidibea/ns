<?php

namespace NS\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NSWebBundle:Default:index.html.twig');
    }
}
