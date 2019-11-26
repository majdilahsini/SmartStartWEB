<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $authChecker = $this->container->get('security.authorization_checker');
        if ($authChecker->isGranted('ROLE_ENTREPRISE')) {
            return $this->render('@User/Default/entreprisehome.html.twig');
        }
        else if ($authChecker->isGranted('ROLE_USER'))
            return $this->render('@User/Default/userhome.html.twig');
        else {
        return $this->render('Default/index.html.twig');
    }
    }

    public function loginAction(Request $request)
    {
        return $this->render('default/login.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
