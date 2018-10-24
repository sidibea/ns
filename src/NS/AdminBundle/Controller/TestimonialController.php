<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/15/18
 * Time: 10:42 PM
 */

namespace NS\AdminBundle\Controller;


use NS\ScenesBundle\Entity\Testimonial;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NS\ScenesBundle\Form\TestimonialType;

class TestimonialController extends Controller
{
    public function listAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT t FROM NSScenesBundle:Testimonial t ";
        $query = $em->createQuery($dql);


        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );
        return $this->render('NSAdminBundle:Testimonials:list.html.twig', [
            'pagination' => $pagination
        ]);
    }

    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $testimonial = new Testimonial();

        $form = $this->createForm(TestimonialType::class, $testimonial);

        if($form->handleRequest($request)->isValid())
        {
            $testimonial->setUpdatedAt(new \datetime);
            $testimonial->setCreatedAt(new \datetime);
            $em->persist($testimonial);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'The testimonial has been successfully created.');

            return $this->redirect($this->generateUrl('ns_admin_testimonials_edit', [ 'id'=> $testimonial->getId() ]));
        }

        return $this->render('NSAdminBundle:Testimonials:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $testimonial = $em->getRepository('NSScenesBundle:Testimonial')->find($id);

        $form = $this->createForm(TestimonialType::class, $testimonial);

        if($form->handleRequest($request)->isValid())
        {
            $testimonial->setUpdatedAt(new \datetime);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'The testimonial has been successfully modified.');

            return $this->redirect($this->generateUrl('ns_admin_testimonials_edit', [ 'id'=> $testimonial->getId() ]));
        }

        return $this->render('NSAdminBundle:Testimonials:add.html.twig', [
            'form' => $form->createView()
        ]);

    }

}