<?php

namespace UserBundle\Controller;

use OffreBundle\Entity\Langues;
use OffreBundle\Entity\Offres;
use OffreBundle\Entity\Skills;
use OffreBundle\Entity\UserLangues;
use OffreBundle\Entity\UserSkills;
use OffreBundle\Form\OffresType;
use OffreBundle\Form\UserLanguesType;
use OffreBundle\Form\UserSkillsType;
use Proxies\__CG__\UserBundle\Entity\Users;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Form\Users2Type;
use UserBundle\Form\UsersType;

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

        $user_skills = $em->getRepository(Offres::class)->getUserSkills($this->getUser()->getId());
        $aquiredskills = [];

        if (isset($user_skills)) {
            $user_skills = array_unique($user_skills);
            foreach ($user_skills as $i) {
                $skill = $em->getRepository(Skills::class)->findBy(array('id' => $i));
                array_push($aquiredskills, $skill);

                }
            }

        $user_langues = $em->getRepository(Offres::class)->getUserLangue($this->getUser()->getId());
        $aquiredlangues = [];

        if (isset($user_langues)) {
            $user_langues = array_unique($user_langues);
            foreach ($user_langues as $i) {
                $langue = $em->getRepository(Langues::class)->findBy(array('ref' => $i));
                array_push($aquiredlangues, $langue);
            }
        }

        $role = -1;
        $authChecker = $this->container->get('security.authorization_checker');
        if ($authChecker->isGranted('ROLE_ENTREPRISE')) {
            $role = 1;
        } else {
            $role = 0;
        }

        return $this->render('@User/Default/monprofil.html.twig', array(
                'user' => $user,
                'skills' => $aquiredskills,
                'langues' => $aquiredlangues,
                'role' => $role));

    }

    public function modifierprofilAction(Request $request,$id) {


        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository(Users::class)->find($id);
        $editForm = $this->createForm(Users2Type::class, $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('mon_profil');
        }

        $user_skills = $em->getRepository(UserSkills::class)->find($this->getUser()->getId());
        $skill = $em->getRepository(Skills::class)->find(2);
        if (!isset($user_skills)) {
            $user_skills = new UserSkills();
            $user_skills->setUser($this->getUser());
            $user_skills->setSkill1($skill);
            $user_skills->setSkill2($skill);
            $user_skills->setSkill3($skill);
            $em->persist($skill);
            $em->persist($user_skills);
            $em->flush();
        }


        $editForm2 = $this->createForm(UserSkillsType::class, $user_skills);
        $editForm2->handleRequest($request);

        if ($editForm2->isSubmitted() && $editForm2->isValid()) {
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('mon_profil');
        }

        $user_langues = $em->getRepository(UserLangues::class)->find($this->getUser()->getId());

        $langue = $em->getRepository(Langues::class)->find(2);
        if (!isset($user_langues)) {
            $user_langues = new UserLangues();
            $user_langues->setUser($this->getUser());
            $user_langues->setLangue1Ref($langue);
            $user_langues->setLangue2Ref($langue);
            $em->persist($user_langues);
            $em->flush();
        }


        $editForm3 = $this->createForm(UserLanguesType::class, $user_langues);
        $editForm3->handleRequest($request);



        if ($editForm3->isSubmitted() && $editForm3->isValid()) {
            $em->persist($user_langues);
            $em->flush();
            return $this->redirectToRoute('mon_profil');
        }

        $role = -1;
        $authChecker = $this->container->get('security.authorization_checker');
        if ($authChecker->isGranted('ROLE_ENTREPRISE')) {
            $role = 1;
        } else {
            $role = 0;
        }

        return $this->render('@User/Default/modifierprofil.html.twig', array(
                'role' => $role,
                'form' => $editForm->createView(),
                'form2'=> $editForm2->createView(),
                'form3'=> $editForm3->createView()));

    }
}
