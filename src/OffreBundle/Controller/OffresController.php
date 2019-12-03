<?php

namespace OffreBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use OffreBundle\Entity\Applications;
use OffreBundle\Entity\Langues;
use OffreBundle\Entity\Offres;
use OffreBundle\Entity\Skills;
use OffreBundle\Entity\Users;
use OffreBundle\Form\OffresType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Offre controller.
 *
 */
class OffresController extends Controller
{
    /**
     * Lists all offre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository('OffreBundle:Offres')->findAll();
        $authChecker = $this->container->get('security.authorization_checker');
        if ($authChecker->isGranted('ROLE_ENTREPRISE')) {
            return $this->render('@Offre/Entreprise/read.html.twig', array(
                'offres' => $offres,
            ));
        }
        else if ($authChecker->isGranted('ROLE_USER')) {

            $applications = $em->getRepository('OffreBundle:Applications')->findBy(array('user' => $this->getUser()));
            return $this->render('@Offre/Client/read.html.twig', array(
                'offres' => $offres,
                'applications' => $applications
            ));
    }

    }

    public function mesOffresAction()
    {
        $users = $this->container->get('security.token_storage')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();

        $offres = $em->getRepository(Offres::class)->myfind($users->getId());

        return $this->render('@Offre/Entreprise/read.html.twig', array(
            'offres' => $offres,
        ));
    }

    /**
     * Creates a new offre entity.
     *
     */
    public function newAction(Request $request)
    {

        $authChecker = $this->container->get('security.authorization_checker');
        if ($authChecker->isGranted('ROLE_ENTREPRISE')) {
            $offre = new Offres();
            $user = $this->getUser();

            $form = $this->createForm(OffresType::class, $offre);
            $form = $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $offre->setEntreprise($user);
                $dateTime = \DateTime::createFromFormat("d/m/Y", date("d/m/Y"));
                $offre->setDatePublication($dateTime);
                $offre->setPhoto("");
                $em->persist($offre);
                $em->flush();

                return $this->redirectToRoute('mes_offre');
            }
            return $this->render('@Offre/Entreprise/ajouter.html.twig', array('form' => $form->createView()));
        } else {
            return $this->redirectToRoute('index');
        }


    }

    /**
     * Finds and displays a offre entity.
     *
     */
    public function showAction(Offres $offre)
    {
        $deleteForm = $this->createDeleteForm($offre);

        return $this->render('offres/show.html.twig', array(
            'offre' => $offre,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing offre entity.
     *
     */
    public function editAction(Request $request, $id)
    {


        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository(Offres::class)->find($id);
        $editForm = $this->createForm(OffresType::class, $offre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em->persist($offre);
            $em->flush();
        return $this->redirectToRoute('mes_offre');

        }

        return $this->render('@Offre/Entreprise/modifier.html.twig', array('form' => $editForm->createView()));

    }

    /**
     * Deletes a offre entity.
     *
     */
    public function deleteAction($id)
    {
        $authChecker = $this->container->get('security.authorization_checker');
        if ($authChecker->isGranted('ROLE_ENTREPRISE')) {
            $em = $this->getDoctrine()->getManager();
            $offre = $em->getRepository(Offres::class)->find($id);
            $application = $em->getRepository(Applications::class)->findBy(array('offre'=>$id));
            foreach($application as $app)
                $em->remove($app);
            $em->remove($offre);
            $em->flush();
            return $this->redirectToRoute('read_offre');
        } else
            return $this->redirectToRoute('index');


    }

    /**
     * Creates a form to delete a offre entity.
     *
     * @param Offres $offre The offre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Offres $offre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offres_delete', array('id' => $offre->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function consulterOffreAction($id)
    {


        $em = $this->getDoctrine()->getManager();
        $offre= $em->getRepository(Offres::class)->find($id);


        $user_skills = $em->getRepository(Offres::class)->getUserSkills($this->getUser()->getId());
        $offre_skills = $em->getRepository(Offres::class)->getOffreSkills($id);

        $user_langues = $em->getRepository(Offres::class)->getUserLangue($this->getUser()->getId());
        $offre_langue = $offre->getLangueRef()->getRef();

        $aquiredskills = [];
        $aquiredlangues = [];

        if (isset($offre_skills))
            $offre_skills = array_unique($offre_skills);
        $count = 0;
        if (isset($user_skills)) {
            $user_skills = array_unique($user_skills);
            foreach ($user_skills as $i) {
                $skill = $em->getRepository(Skills::class)->findBy(array('id' => $i));
                array_push($aquiredskills, $skill);
                foreach ($offre_skills as $j) {
                    if ($i == $j)
                        $count++;
                }
            }
        }
        $count2 = 0;
        if (isset($user_langues)) {
            $user_langues = array_unique($user_langues);
            foreach ($user_langues as $i) {
                $langue = $em->getRepository(Langues::class)->findBy(array('ref' => $i));
                array_push($aquiredlangues, $langue);
                if ($i == $offre_langue)
                    $count2++;
            }
        }


        $note_competences = ($count*4.87 + $count2) / (sizeof($offre_skills) *5 + 1) * 100;
        $pieChart = new BarChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Section', '%'],
                ['Offre',  100],
                ['Votre Profil', $note_competences]
            ]
        );
        $pieChart->getOptions()->setHeight(275);
        $pieChart->getOptions()->setWidth(900);

        if ($note_competences > 80)
            $pieChart->getOptions()->setColors(['#007A03']);
        elseif ($note_competences < 40)

            $pieChart->getOptions()->setColors(['#da0833']);
        $pieChart->getOptions()->getLegend()->setPosition('none');
        $pieChart->getOptions()->getHAxis()->setMinValue(0);

        $count = $em->getRepository(Offres::class)->getNbrCandidatures($id);

        $count2 = $em->getRepository(Offres::class)->checkifpostuler($id, $this->getUser()->getId());
        $application = $em->getRepository(Applications::class)->findBy(array('offre'=> $id, 'user'=>$this->getUser()->getId()));

        $role = -1;
        $authChecker = $this->container->get('security.authorization_checker');
        if ($authChecker->isGranted('ROLE_ENTREPRISE')) {
            $role = 1;
        } else {
            $role = 0;
        }




        return $this->render('@Offre/Client/consulteroffre.html.twig', array(
            'offre' => $offre,
            'Skills' => $aquiredskills,
            'langues' => $aquiredlangues,
            'user_skills' => $aquiredlangues,
            'piechart' => $pieChart,
            'score' => $note_competences,
            'count' => $count,
            'sicondidater' => $count2,
            'role' => $role,
            'application' => $application
        ));

    }

    public function mescandidaturesAction () {

        $em = $this->getDoctrine()->getManager();
        $offres= $em->getRepository(Offres::class)->getMesCandidatures($this->getUser()->getId());
        $applications = $em->getRepository(Applications::class)->findBy(array('user'=>$this->getUser()->getId()));


        return $this->render('@Offre/Client/read.html.twig', array(
            'offres' => $offres,
            'applications' => $applications,
            'Message' => "Vos Condidatures"
        ));

    }

}
