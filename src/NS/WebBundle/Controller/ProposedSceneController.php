<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/2/18
 * Time: 5:32 AM
 */

namespace NS\WebBundle\Controller;


use NS\ScenesBundle\Entity\ProposedScene;
use NS\ScenesBundle\Form\ProposedSceneType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProposedSceneController extends Controller
{

    public function addAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $scene = $em->getRepository('NSSceneBundle:ProposedScene')->find($id);
        $proposed = new ProposedScene();
        $form = $this->createForm(ProposedSceneType::class, $proposed);

        if($form->handleRequest($request)->isValid())
        {

            $proposed->setIsEnabled(true);
            $proposed->setCreatedAt(new \datetime);
            $proposed->setUpdatedAt(new \datetime);

            $em->persist($proposed);
            $em->flush();



        }


        return $this->render('NSWebBundle:ProposedScene:add.html.twig', [
            'form' => $form->createView(),
            'scene' => $scene
        ]);
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $scene = $em->getRepository('NSScenesBundle:ProposedScene')->find($id);

        return $this->render('NSWebBundle:ProposedScene:view.html.twig', [
            'proposed' => $scene
        ]);
    }

}