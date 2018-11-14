<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/5/18
 * Time: 4:20 PM
 */

namespace NS\UserBundle\Controller;


use Symfony\Component\HttpFoundation\Request;

class SecurityController extends \FOS\UserBundle\Controller\SecurityController
{
    public function loginAction(Request $request)
    {

        $secret = '6LcPAncUAAAAABwK6MoRj2nL2-mGagr_9qH5O25m';
        $remoteIp = $request->getClientIp();
        $recaptcha = new \ReCaptcha\ReCaptcha($secret);
        if(isset($_POST['g-recaptcha-response']))
            $gRecaptchaResponse = $_POST['g-recaptcha-response'];
        else
            $gRecaptchaResponse = null;

        $resp = $recaptcha->setExpectedHostname('127.0.0.1:8000')
            ->verify($gRecaptchaResponse, $remoteIp);
        if ($resp->isSuccess()) {
            // Verified!
            $authenticationUtils = $this->get('security.authentication_utils');

        } else {
            $error = $resp->getErrorCodes();
        }
        $authenticationUtils = $this->get('security.authentication_utils');



        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)

        return $this->render('NSUserBundle:Security:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }

}