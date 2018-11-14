<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/2/18
 * Time: 1:41 AM
 */

namespace NS\AdminBundle\Controller;


use NS\ForumBundle\Entity\Forum;
use NS\ForumBundle\Form\ForumType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ForumController extends Controller
{
    public function listAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT f FROM NSForumBundle:Forum f";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );

        return $this->render('NSAdminBundle:Forum:list.html.twig', [
            'pagination' => $pagination
        ]);
    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $forum = new Forum();
        $form = $this->createForm(ForumType::class, $forum);

        if($form->handleRequest($request)->isValid())
        {

            $forum->setCreatedAt(new \datetime);
            $forum->setUpdatedAt(new \datetime);

            $em->persist($forum);
            $em->flush();


            $request->getSession()->getFlashBag()->add('success', 'L\'axe a bien été enregistrée.');

            return $this->redirect($this->generateUrl('ns_admin_forun_edit', ['id' => $forum->getId()]));

        }

        return $this->render('NSAdminBundle:Forum:add.html.twig', [
            'form' => $form->createView()
        ]);

    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $forum = $em->getRepository('NSForumBundle:Forum')->find($id);
        $form = $this->createForm(ForumType::class, $forum);

        if($form->handleRequest($request)->isValid())
        {

            $forum->setUpdatedAt(new \datetime);

            $em->flush();


            $request->getSession()->getFlashBag()->add('success', 'L\'axe a bien été enregistrée.');

            return $this->redirect($this->generateUrl('ns_admin_forun_edit', ['id' => $forum->getId()]));

        }

        return $this->render('NSAdminBundle:Forum:add.html.twig', [
            'form' => $form->createView()
        ]);

    }

}