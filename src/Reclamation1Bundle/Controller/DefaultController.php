<?php

namespace Reclamation1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Reclamation1Bundle:Default:index.html.twig');
    }
}
