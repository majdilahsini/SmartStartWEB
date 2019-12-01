<?php

namespace UserBundle\Controller;

use Proxies\__CG__\UserBundle\Entity\Users;
use Reclamation1Bundle\Entity\UserSkills;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->redirectToRoute('index');
    }

    public function redirectAction()
    {
    }

    public function monprofilAction() {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Users::class)->find($this->getUser()->getId());



        return $this->render('@User/Default/monprofil.html.twig', array('user' => $user));

    }
}
