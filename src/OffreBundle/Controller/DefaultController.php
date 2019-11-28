<?php

namespace OffreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OffreBundle:Default:index.html.twig');
    }

    public function ajouterAction()
    {
        return $this->render('@Offre/Entreprise/ajouter.html.twig');
    }

    public function readAction()
    {
        return $this->render('@Offre/Entreprise/read.html.twig');
    }

}
