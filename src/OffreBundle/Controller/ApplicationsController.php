<?php

namespace OffreBundle\Controller;

use OffreBundle\Entity\Applications;
use OffreBundle\Entity\Offres;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApplicationsController extends Controller
{

    public function postulerAction($id, $match) {

        $application = new Applications();
        $em = $this->getDoctrine()->getManager();

        $offre = new Offres();
        $offre->setId($id);
        $application->setUser($this->getUser());
        $application->setOffre($offre);
        $application->setMatchs($match);

        $em->merge($application);
        $em->flush();

    return $this->render('@Offre/Default/index.html.twig');

    }

}
