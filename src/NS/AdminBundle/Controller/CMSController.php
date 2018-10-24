<?php
/**
 * Created by PhpStorm.
 * User: gincogroupprojects
 * Date: 10/23/18
 * Time: 4:43 AM
 */

namespace NS\AdminBundle\Controller;


use NS\ScenesBundle\Entity\TermsOfUse;
use NS\ScenesBundle\Form\TermsOfUseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CMSController extends Controller
{
    public function termsAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $terms = $em->getRepository('NSScenesBundle:TermsOfUse')->find(1);

        $form = $this->createForm(TermsOfUseType::class, $terms);

        if($form->handleRequest($request)->isValid())
        {
            $terms->setCreatedAt(new \datetime);
            $terms->setUpdatedAt(new \datetime);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', 'The terms of use has been successfully updated');

            return $this->redirect($this->generateUrl('ns_terms_of_use'));

        }

        return $this->render('NSAdminBundle::terms.html.twig', [
            'form' => $form->createView()
        ]);


    }

}