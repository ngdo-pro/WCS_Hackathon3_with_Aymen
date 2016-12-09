<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{

    public function redirectAction(Request $request)
    {
        if( null != $request->getLocale()){
            $locale = $request->getLocale();
        }else{
            $locale = "en";
        }

        return $this->redirectToRoute('app_homepage', array('_locale' => $locale));
    }

    public function indexAction()
    {
        return $this->render('AppBundle:Main:index.html.twig');
    }
}
