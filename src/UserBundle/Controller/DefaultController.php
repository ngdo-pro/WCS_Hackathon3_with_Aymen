<?php

namespace UserBundle\Controller;

use UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    public function tripAction()
    {
        $user = $this->getUser();
        return $this->render('course/show.html.twig', array(
            'user' =>$user
    ));

    }
}