<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/29/18
 * Time: 7:48 PM
 */

namespace NS\WebBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $forums = $em->getRepository('NSForumBundle:Forum')->findBy(['isEnabled' => true]);

        return $this->render('NSWebBundle:Forum:list.html.twig', [
            'forums' => $forums
        ]);
    }

}