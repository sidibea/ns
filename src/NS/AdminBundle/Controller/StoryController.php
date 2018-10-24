<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/21/18
 * Time: 10:49 PM
 */

namespace NS\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StoryController extends Controller
{
    public function listAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT s FROM NSScenesBundle:Storyline s ";
        $query = $em->createQuery($dql);


        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1),
            500
        );

        return $this->render('NSAdminBundle:Story:list.html.twig', [
            'pagination' => $pagination
        ]);
    }

}