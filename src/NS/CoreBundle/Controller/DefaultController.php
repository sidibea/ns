<?php

namespace NS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NSCoreBundle:Default:index.html.twig');
    }
}
