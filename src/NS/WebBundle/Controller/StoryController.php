<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/16/18
 * Time: 6:57 PM
 */

namespace NS\WebBundle\Controller;


use NS\ScenesBundle\Entity\Scene;
use NS\ScenesBundle\Entity\Storyline;
use NS\ScenesBundle\Form\ContributorsType;
use NS\ScenesBundle\Form\SceneType;
use NS\ScenesBundle\Form\StorylineType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

class StoryController extends Controller
{
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $story = new Storyline();


        $form = $this->createForm(StorylineType::class, $story);

        if($form->handleRequest($request)->isValid())
        {

            $story->setCreatedAt(new \datetime);
            $story->setUpdatedAt(new \datetime);
            $story->setPublishedBy($this->getUser());

            $em->persist($story);
            $em->flush();

            if($story->getContributors() !== null)
            {
                // dump($story->getContributors()); exit;

                foreach ($story->getContributors() as $key => $contributor)
                {
                    $this->sendEmail($contributor->getEmail(), $contributor->getFirstname(), $contributor->getLastname(),  $this->getUser()->getFirstname()." ".$this->getUser()->getLastname(), $story->getId());

                }

            }

            $request->getSession()->getFlashBag()->add('notice', 'The storyline has been successfully created.');

            return $this->redirect($this->generateUrl('ns_web_story_new_scene', ['id' => $story->getId()]));

        }

        return $this->render('NSWebBundle:Story:add.html.twig',[
            'form' => $form->createView(),
            //'sceneForm' => $sceneForm->createView()
        ]);
    }

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $story = $em->getRepository('NSScenesBundle:Storyline')->find($id);


        $form = $this->createForm(StorylineType::class, $story);

        if($form->handleRequest($request)->isValid())
        {

            $story->setUpdatedAt(new \datetime);

            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'The storyline has been successfully updated.');

            return $this->redirect($this->generateUrl('ns_web_story_view', ['id' => $story->getId()]));

        }

        return $this->render('NSWebBundle:Story:edit.html.twig',[
            'form' => $form->createView(),
            'story' => $story
            //'sceneForm' => $sceneForm->createView()
        ]);
    }

    public function firstSceneAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $scene = new Scene();

        $story = $em->getRepository('NSScenesBundle:Storyline')->find($id);
        $count = $em->getRepository('NSScenesBundle:Scene')->SceneCount($id);

        $form = $this->createForm(SceneType::class, $scene);

        if($form->handleRequest($request)->isValid())
        {
            $scene->setTitle("Scene ".$count." (".$scene->getTitle().")");
            $scene->setCreatedAt(new \datetime);
            $scene->setUpdatedAt(new \datetime);
            $scene->setStoryline($story);
            $scene->setIsEnabled(true);
            $scene->setCount($count);

            $em->persist($scene);
            $em->flush();



            $request->getSession()->getFlashBag()->add('success', 'The scenes has been successfully created.');

            return $this->redirect($this->generateUrl('ns_web_story_view', ['id' => $id ]));

        }

        return $this->render('NSWebBundle:Story:firstscene.html.twig',[
            'form' => $form->createView(),
            //'sceneForm' => $sceneForm->createView()
        ]);
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $story = $em->getRepository('NSScenesBundle:Storyline')->find($id);
        return $this->render('NSWebBundle:Story:view.html.twig', [
            'story' => $story
        ]);
    }

    public function readAction($id, Request $request)
    {
        $em    = $this->getDoctrine()->getManager();
        $story = $em->getRepository('NSScenesBundle:Storyline')->find($id);

        $dql   = "SELECT s FROM NSScenesBundle:Scene s WHERE s.storyline = :story and s.isEnabled = :true Order BY s.createdAt";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'story' => $story,
            'true' => true
        ]);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            1/*limit per page*/
        );

        // parameters to template
        return $this->render('NSWebBundle:Story:read.html.twig', [
            'pagination' => $pagination,
            'story' => $story
        ]);
    }

    public function userStory(Request $request)
    {
        $em = $this->getDoctrine()->getManager();



        //dump($id); exit;

        $dql   = "SELECT f FROM NSForumBundle:Forum f JOIN  f.storylines st
                  
                  JOIN st.publishedBy u
                  WHERE  u.id = :user
                   and f.isEnabled = :true 
                   Order BY f.createdAt ";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'user' => $this->getUser()->getId(),
            'true' => true
        ]);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        //dump($pagination); exit;

        return $this->render('NSWebBundle:Story:userStory.html.twig', [
            'pagination' => $pagination
        ]);
    }

    public function sendEmail($email, $firstname, $lastname, $author, $story )
    {
        $mailer = $this->get('mailer');


        $message = (new \Swift_Message('Nextscenes.com - Invitation'))
            ->setFrom('noreply@nextscenes.com')
            ->setTo($email)
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'NSWebBundle:emails:invitation.html.twig',[
                        'firstname' => $firstname,
                        'lastname' => $lastname,
                        'author' => $author,
                        'story' => $story
                    ]
                ),
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;

        $mailer->send($message);
    }

    public function userProposed( Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id = $request->get('id');

        $dql   = "SELECT p, s, st, u FROM NSScenesBundle:ProposedScene p  JOIN p.scene s JOIN s.storyline st JOIN st.publishedBy u WHERE u.id = :user and st.id = :storyline and p.isEnabled = :false Order BY p.createdAt ";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'user' => $this->getUser()->getId(),
            'storyline' => $id,
            'false' => false
        ]);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        //dump($pagination); exit;

        return $this->render('NSWebBundle:ProposedScene:userProposed.html.twig', [
            'pagination' => $pagination,
            'id' => $id
        ]);
    }

    public function addContributorsAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $story = $em->getRepository('NSScenesBundle:Storyline')->find($id);
        $form = $this->createForm(ContributorsType::class, $story);

        if($form->handleRequest($request)->isValid())
        {
            $story->setUpdatedAt(new \datetime);
            $em->flush();

            if($story->getContributors() !== null)
            {
                // dump($story->getContributors()); exit;

                foreach ($story->getContributors() as $key => $contributor)
                {
                    $this->sendEmail($contributor->getEmail(), $contributor->getFirstname(), $contributor->getLastname(),  $this->getUser()->getFirstname()." ".$this->getUser()->getLastname(), $story->getId());

                }

            }

            $request->getSession()->getFlashBag()->add('notice', 'The contributors has been successfully added');

            return $this->redirect($this->generateUrl('ns_web_story_view', ['id' => $id ]));

        }

        return $this->render('NSWebBundle:Story:addContributors.html.twig', [
            'form' => $form->createView(),
            'story' => $story
        ]);
    }

    public function contributors(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT  u FROM NSUserBundle:User u JOIN u.storylines st  WHERE st.publishedBy = :user ";
        $query = $em->createQuery($dql);
        $query->setParameters([
            'user' => $this->getUser(),
        ]);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );

        //dump($pagination); exit;

        return $this->render('NSWebBundle:Story:contributors.html.twig', [
            'pagination' => $pagination
        ]);


    }

    public function deleteAction($id, Request $request)
    {
        $em    = $this->getDoctrine()->getManager();
        $story = $em->getRepository('NSScenesBundle:Storyline')->find($id);

        try{
            $em->remove($story);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'The storyline  has been successfully deleted');

            return $this->redirect($this->generateUrl('fos_user_profile_show'));
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }

    public function validateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $proposed = $proposed = $em->getRepository('NSScenesBundle:ProposedScene')->find($id);

        $scene = new Scene();

        $scene->setContent($proposed->getContent());
        $scene->setTitle($proposed->getTitle());
        $scene->setCreatedAt(new \datetime);
        $scene->setUpdatedAt(new \datetime);
        $scene->setCount($proposed->getScene()->getCount()+1);
        $scene->setStoryline($proposed->getScene()->getStoryline());
        $scene->setIsEnabled(true);


        $em->persist($scene);
        $em->flush();

        $del = $em->getRepository('NSScenesBundle:ProposedScene')->findBy([
            'scene' => $proposed->getScene()
        ]);

        if($del != null)
        {
            foreach ($del as $key=>$val)
            {
                $em->remove($val);
                $em->flush();
            }
        }
        $em->remove($proposed);
        $em->flush();



        $request->getSession()->getFlashBag()->add('notice', 'The scenes has been successfully created.');

        return $this->redirect($this->generateUrl('ns_admin_scenes'));





    }





}