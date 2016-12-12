<?php

namespace HomeBundle\Controller;

use HomeBundle\Entity\Rent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Rent controller.
 *
 */
class RentController extends Controller
{
    /**
     * Lists all rent entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rents = $em->getRepository('HomeBundle:Rent')->findAll();

        return $this->render('rent/index.html.twig', array(
            'rents' => $rents,
        ));
    }

    /**
     * Finds and displays a rent entity.
     *
     */
    public function showAction(Rent $rent)
    {

        return $this->render('rent/show.html.twig', array(
            'rent' => $rent,
        ));
    }
}
