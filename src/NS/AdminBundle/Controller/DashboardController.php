<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/2/18
 * Time: 1:34 AM
 */

namespace NS\AdminBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('NSUserBundle:User')->NumberOfUsers();
        $storyline = $em->getRepository('NSScenesBundle:Storyline')->NumberOfStorylines();
        $scenes = $em->getRepository('NSScenesBundle:Scene')->NumberOfScenes();
        $proposed = $em->getRepository('NSScenesBundle:ProposedScene')->NumberOfProposedScenes();
        $articles = $em->getRepository('NSForumBundle:Articles')->NumberOfArticles();

        $storyChart = $em->getRepository('NSScenesBundle:Storyline')->getStoryChart();
        $sceneChart = $em->getRepository('NSScenesBundle:Scene')->getScenesChart();



        return $this->render('NSAdminBundle:Homepage:dasboard.html.twig', [
            'users' => $users,
            'storyline' => $storyline,
            'scenes' => $scenes,
            'proposed' => $proposed,
            'articles' => $articles,
            'storyChart' => $storyChart,
            'sceneChart' => $sceneChart
        ]);
    }

}