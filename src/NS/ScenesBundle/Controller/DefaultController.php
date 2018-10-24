<?php

namespace NS\ScenesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NSScenesBundle:Default:index.html.twig');
    }
}
