<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/2/18
 * Time: 1:13 PM
 */

namespace NS\ForumBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
    public function MenuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $forums = $em->getRepository('NSForumBundle:Forum')->findBy([
            'isEnabled' => true
        ]);
        return $this->render("NSWebBundle:Homepage:Category/category.html.twig", [
            'forums' => $forums
        ]);
    }

    public function verticalAction()
    {
        $em = $this->getDoctrine()->getManager();
        $forums = $em->getRepository('NSForumBundle:Forum')->findBy([
            'isEnabled' => true
        ]);
        return $this->render("NSWebBundle:Homepage:Category/vertical.html.twig", [
            'forums' => $forums
        ]);


    }

}