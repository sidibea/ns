<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/3/18
 * Time: 12:05 PM
 */

namespace NS\AdminBundle\Controller;


use NS\ScenesBundle\Entity\Scene;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ScenesController extends Controller
{

    public function listAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT p FROM NSScenesBundle:ProposedScene p WHERE p.isEnabled = :false";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'false' => false
        ]);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        return $this->render('NSAdminBundle:Scenes:list.html.twig', [
            'pagination' => $pagination
        ]);
    }

    public function viewAction($id, Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $proposed = $em->getRepository('NSScenesBundle:ProposedScene')->findBy([
            'id' => $id
        ]);

        //dump($proposed); exit;



        return $this->render('NSAdminBundle:Scenes:view.html.twig', [
            'proposed' => $proposed[0]
        ]);

    }

    public function validateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $proposed = $proposed = $em->getRepository('NSScenesBundle:ProposedScene')->find($id);

        $scene = new Scene();

        $scene->setContent($proposed->getContent());
        $scene->setTitle($proposed->getScene()->getTitle()."[proposed]/scene-".$proposed->getCount());
        $scene->setCreatedAt(new \datetime);
        $scene->setUpdatedAt(new \datetime);
        $scene->setStoryline($proposed->getScene()->getStoryline());
        $scene->setIsEnabled(true);

        $em->remove($proposed);
        $em->persist($scene);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'The scenes has been successfully created.');

        return $this->redirect($this->generateUrl('ns_admin_scenes'));





    }

}