<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/2/18
 * Time: 5:20 PM
 */

namespace NS\WebBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    public function homepageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $forum = $em->getRepository('NSForumBundle:Forum')->findBy([
            'isEnabled' => true
        ]);
        $dql   = "SELECT s FROM NSForumBundle:Articles s WHERE  s.enabled = :true Order BY s.createdAt ASC ";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'true' => true
        ]);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            4/*limit per page*/
        );

        return $this->render('NSWebBundle:Homepage:index.html.twig',[
            'forums' => $forum,
            'articles' => $pagination
        ]);

    }

    public function forumAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $forum = $em->getRepository('NSForumBundle:Forum')->find($id);



        return $this->render('NSWebBundle:Forum:index.html.twig', [
            'forum' => $forum
        ]);

    }

    public function howAction()
    {
        return $this->render('NSWebBundle::howTo.html.twig');
    }

    public function contactAction()
    {
        return $this->render('NSWebBundle::contact.html.twig');
    }

    public function showArticleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('NSForumBundle:Articles')->find($id);
        return $this->render('NSWebBundle:Blog:single.html.twig', [
            'article' => $article
        ]);
    }

    public function CounterAction()
    {
        $em = $this->getDoctrine()->getManager();

        $author = $em->getRepository('NSUserBundle:User')->NumberOfAuthors();
        $storyline = $em->getRepository('NSScenesBundle:Storyline')->NumberOfStorylines();
        $scenes = $em->getRepository('NSScenesBundle:Scene')->NumberOfScenes();
        $proposed = $em->getRepository('NSScenesBundle:ProposedScene')->NumberOfProposedScenes();



        return $this->render('NSWebBundle::counter.html.twig', [
            'authors' => $author,
            'storyline' => $storyline,
            'scenes' => $scenes,
            'proposed' => $proposed
        ]);
    }

    public function TestimonialAction()
    {
        $em = $this->getDoctrine()->getManager();
        $testimonial = $em->getRepository('NSScenesBundle:Testimonial')->findBy([
            'enabled' => true
        ]);
        return $this->render('NSWebBundle::testimonials.html.twig', [
            'testimonials' => $testimonial
        ]);
    }

    public function partnerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $partners = $em->getRepository('NSScenesBundle:Partner')->findAll();

        return $this->render('NSWebBundle::partners.html.twig', [
            'partners' => $partners
        ]);
    }







}