<?php

namespace NS\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NSForumBundle:Default:index.html.twig');
    }
}
