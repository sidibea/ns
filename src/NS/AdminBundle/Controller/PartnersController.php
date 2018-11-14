<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/20/18
 * Time: 1:25 AM
 */

namespace NS\AdminBundle\Controller;


use NS\ScenesBundle\Entity\Partner;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NS\ScenesBundle\Form\PartnerType;

class PartnersController extends Controller
{
    public function listAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT p FROM NSScenesBundle:Partner p ";
        $query = $em->createQuery($dql);


        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );
        return $this->render('NSAdminBundle:Partners:list.html.twig', [
            'pagination' => $pagination
        ]);
    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $partner = new Partner();

        $form = $this->createForm(PartnerType::class, $partner);

        if($form->handleRequest($request)->isValid())
        {
            $partner->setUpdatedAt(new \datetime);
            $partner->setCreatedAt(new \datetime);
            $em->persist($partner);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'The testimonial has been successfully created.');

            return $this->redirect($this->generateUrl('ns_admin_partners_edit', [ 'id'=> $partner->getId() ]));
        }

        return $this->render('NSAdminBundle:Partners:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $partner = $em->getRepository('NSScenesBundle:Partner')->find($id);

        $form = $this->createForm(PartnerType::class, $partner);

        if($form->handleRequest($request)->isValid())
        {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'The partner has been successfully created.');

            return $this->redirect($this->generateUrl('ns_admin_partners_edit', [ 'id'=> $partner->getId() ]));
        }

        return $this->render('NSAdminBundle:Partners:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

}