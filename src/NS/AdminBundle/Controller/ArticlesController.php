<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/10/18
 * Time: 1:11 PM
 */

namespace NS\AdminBundle\Controller;


use NS\ForumBundle\Entity\Articles;
use NS\ForumBundle\Form\ArticlesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArticlesController extends Controller
{
    public function listAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM NSForumBundle:Articles a ORDER BY a.createdAt";
        $query = $em->createQuery($dql);


        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        return $this->render('NSAdminBundle:Articles:list.html.twig', [
            'pagination' => $pagination
        ]);
    }

    public function addAction(Request $request)
    {
        $em= $this->getDoctrine()->getManager();
        $article = new Articles();
        $form = $this->createForm(ArticlesType::class, $article);

        if($form->handleRequest($request)->isValid())
        {
            $article->setCreatedAt(new \datetime);
            $article->setUpdatedAt(new \datetime);
            $em->persist($article);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'The article has benn successfully created');

            return $this->redirect($this->generateUrl('ns_admin_articles_edit', ['id' => $article->getId()]));


        }


        return $this->render('NSAdminBundle:Articles:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function editAction($id, Request $request)
    {
        $em= $this->getDoctrine()->getManager();
        $article = $em->getRepository('NSForumBundle:Articles')->find($id);
        $form = $this->createForm(ArticlesType::class, $article);

        if($form->handleRequest($request)->isValid())
        {
            $article->setUpdatedAt(new \datetime);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'The article has benn successfully created');

            return $this->redirect($this->generateUrl('ns_admin_articles_edit', ['id' => $article->getId()]));


        }

        return $this->render('NSAdminBundle:Articles:add.html.twig', [
            'form' => $form->createView()
        ]);
    }


}