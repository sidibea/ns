<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/24/18
 * Time: 2:24 PM
 */

namespace NS\WebBundle\Controller;


use NS\ScenesBundle\Entity\ProposedScene;
use NS\ScenesBundle\Entity\Scene;
use NS\ScenesBundle\Form\ProposedSceneType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NS\ScenesBundle\Form\SceneType;

class SceneController extends Controller
{

    public function newAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $story = $em->getRepository('NSScenesBundle:Storyline')->find($id);
        $scene = new Scene();
        $count = $em->getRepository('NSScenesBundle:Scene')->SceneCount($id);

        $form = $this->createForm(SceneType::class, $scene);

        if($form->handleRequest($request)->isValid())
        {
            $scene->setCreatedAt(new \datetime);
            $scene->setUpdatedAt(new \datetime);
            $scene->setStoryline($story);
            $scene->setIsEnabled(true);
            $scene->setCount($count);

            $em->persist($scene);
            $em->flush();





            $request->getSession()->getFlashBag()->add('notice', 'The scenes has been successfully created.');

            return $this->redirect($this->generateUrl('ns_web_scenes_read', ['id' => $scene->getId()]));

        }

        return $this->render('NSWebBundle:Scenes:add.html.twig', [
            'form' => $form->createView()
        ]);

    }

    public function viewAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //dump($id); exit;
        $story = $em->getRepository('NSScenesBundle:Storyline')->find($id);

        $dql   = "SELECT s FROM NSScenesBundle:Scene s WHERE s.storyline = :story and s.isEnabled = :true Order BY s.createdAt, s.count DESC ";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'story' => $story,
            'true' => true
        ]);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        $lastScene = $em->getRepository('NSScenesBundle:Scene')->LastScene($id);
        if($lastScene != null)
            $count = $em->getRepository('NSScenesBundle:ProposedScene')->LastProposed($lastScene[0]->getId());
        else
            $count = null;


        //dump($lastScene); exit;

        $proposed = new ProposedScene();
        $form = $this->createForm(ProposedSceneType::class, $proposed);

        if($form->handleRequest($request)->isValid())
        {
            $proposed->setIsEnabled(false);
            $proposed->setPublishedBy($this->getUser());
            $proposed->setScene($lastScene[0]);
            $proposed->setCount($count);

            $proposed->setCreatedAt(new \datetime);
            $proposed->setUpdatedAt(new \datetime);

            $em->persist($proposed);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'The scenes has been successfully created.');

            return $this->redirect($this->generateUrl('ns_web_scenes_view', ['id' => $id]));
        }



        return $this->render('NSWebBundle:Scenes:view.html.twig', [
            'pagination' => $pagination,
            'story' => $story,
            'form' => $form->createView(),
            'scene' =>  ($lastScene != null)?$lastScene[0]:null
        ]);
    }

    public function latestScenes($id)
    {
        $em = $this->getDoctrine()->getManager();
        $scene = $em->getRepository('NSScenesBundle:Scene')->getLatestScene($id, 5);


        return $this->render('NSWebBundle:Scenes:latestScenes.html.twig', [
            'scenes' => $scene
        ]);
    }

    public function proposedScene($story, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $dql   = "SELECT s,sc,st FROM NSScenesBundle:ProposedScene s JOIN s.scene sc LEFT JOIN sc.storyline st  WHERE st.id = :story and  s.isEnabled = :false Order BY s.createdAt, s.id ";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'false' => false,
            'story' => $story
        ]);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1),
            100
        );

        return $this->render('NSWebBundle:Scenes:ProposedScene.html.twig', [
            'pagination' => $pagination
        ]);

    }


    public function readAction($id)
    {
        $em = $this->getDoctrine()->getManager();


        $scene = $em->getRepository('NSScenesBundle:Scene')->find($id);
        return $this->render('NSWebBundle:Scenes:read.html.twig', [
            'scene' => $scene,
        ]);
    }

    public function proposedSceneForm($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();




        return $this->render('NSWebBundle:Scenes:form.html.twig', [

        ]);

    }

}