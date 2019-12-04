<?php

namespace OffreBundle\Controller;

use Composer\Console\Application;
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
        $application->setEtat(0);


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
            return $this->redirectToRoute('read_offre');

    }

    public function affichercandidaturesAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository(Offres::class)->getOffreUsers($id);
        $applications = $em->getRepository(Applications::class)->findBy(array('offre' => $id));

        return $this->render('@Offre/Entreprise/candidatures.html.twig', array( 'users' => $users, 'applications' =>$applications));

    }

    public function accepterAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $application = $em->getRepository(Applications::class)->find($id);

        $application->setEtat(1);
        $em->persist($application);
        $em->flush();

        return $this->redirectToRoute('candidatures_offre', array('id' => $application->getOffre()->getId()));

    }

    public function refuserAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $application = $em->getRepository(Applications::class)->find($id);
        $application->setEtat(2);
        $em->persist($application);
        $em->flush();

        return $this->redirectToRoute('candidatures_offre', array('id' => $application->getOffre()->getId()));

    }

}
