<?php

namespace NS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NSAdminBundle:Default:index.html.twig');
    }
}
