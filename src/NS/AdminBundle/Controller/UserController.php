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

class UserController extends Controller
{
    public function listAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT u FROM NSUserBundle:User u ";
        $query = $em->createQuery($dql);


        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1),
            500
        );

        return $this->render('NSAdminBundle:Users:list.html.twig', [
            'pagination' => $pagination
        ]);
    }

}