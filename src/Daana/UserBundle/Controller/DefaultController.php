<?php

namespace Daana\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $session = $this->getRequest()->getSession();
        $message="";
/*        foreach ($session->getFlashBag()->get('message', array()) as $tempMessage) {
            $message.=$tempMessage;
        }        
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        $last_target=$session->get('_security.secured_area.target_path'); */
        return $this->render('DaanaUserBundle:Default:index.html.twig',array());
    }

    public function loginSubmitAction(Request $request){
        $message="";
        echo "Swami";
    }
}

