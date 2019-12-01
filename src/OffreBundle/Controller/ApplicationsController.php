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


        return $this->redirectToRoute('read_offre');


    }

    public function deleteAction($id)
    {

            $offre = new Offres();
            $offre->setId($id);
            $em = $this->getDoctrine()->getManager();
            $application = $em->getRepository(Applications::class)->findOneBy(array('offre'=> $offre));
            $em->remove($application);
            $em->flush();
            return $this->redirectToRoute('offres_index');

    }

}
