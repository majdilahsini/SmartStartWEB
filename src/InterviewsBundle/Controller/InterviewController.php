<?php

namespace InterviewsBundle\Controller;

use FormationBundle\Entity\temporaire;
use InterviewsBundle\Entity\Evaluation;
use InterviewsBundle\Entity\Interview;
use InterviewsBundle\Entity\OffresEnt;
use InterviewsBundle\Entity\Temporaire_offres;
use InterviewsBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;


/**
 * Interview controller.
 *
 */
class InterviewController extends Controller
{
    /**
     * Lists all interview entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $interviews = $em->getRepository('InterviewsBundle:Interview')->findAll();

        return $this->render('interview/index.html.twig', array(
            'interviews' => $interviews,
        ));
    }

    /**
     * Creates a new interview entity.
     *
     */
    public function newAction(Request $request)
    {
        $interview = new Interview();
        $form = $this->createForm('InterviewsBundle\Form\InterviewType', $interview);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($interview);
            $em->flush();

            return $this->redirectToRoute('interview_show', array('refEnt' => $interview->getRefent()));
        }

        return $this->render('@Interviews/interview/new.html.twig', array(
            'interview' => $interview,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a interview entity.
     *
     */
    public function showAction(Interview $interview)
    {
        $deleteForm = $this->createDeleteForm($interview);

        return $this->render('interview/show.html.twig', array(
            'interview' => $interview,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing interview entity.
     *
     */
    public function editAction(Request $request, Interview $interview)
    {
        $deleteForm = $this->createDeleteForm($interview);
        $editForm = $this->createForm('InterviewsBundle\Form\InterviewType', $interview);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('interview_edit', array('refEnt' => $interview->getRefent()));
        }

        return $this->render('interview/edit.html.twig', array(
            'interview' => $interview,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a interview entity.
     *
     */
    public function deleteAction(Request $request, Interview $interview)
    {
        $form = $this->createDeleteForm($interview);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($interview);
            $em->flush();
        }

        return $this->redirectToRoute('interview_index');
    }

    /**
     * Creates a form to delete a interview entity.
     *
     * @param Interview $interview The interview entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Interview $interview)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('interview_delete', array('refEnt' => $interview->getRefent())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    public function affichoffres_entAction(){
        $user = $this->getUser();
        $id=$user->getId();
         $resultat=array();
        $resultatt=array();
        $resultattt=array();

        $array=array();


     /*  $repository =$this->getDoctrine()->getManager()->getRepository(Temporaire_offres::class);
         $list = $repository->afficherOffres($id);*/
        /* fvdfd*/

     /*  $em = $this->getDoctrine()->getManager();
       $repository = $this->getDoctrine()->getManager()->getRepository(Temporaire_offres::class);
       $id_entreprise = $repository->getUsersByEntreprise($id);
       var_dump($id);*/

/*
            $offres = $em->getRepository(OffresEnt::class)->findByIdEntreprise($id);
        foreach ($offres as $offres) {
            if ( $offres->getOffreId()) {
                $entretien = $em->getRepository(Interview::class)->findOneByOffre($offres->getOffreId());
                array_push($resultat, $entretien);
            }
        }
            if (!empty($resultat)) {

foreach ( $resultat as $resultat){
                $list = $repository->afficherOffress($id, $resultat[0]);
    array_push($resultattt, $list);
}}


             else {
                $list = $repository->afficherOffres($id);
            }

        return $this->render('@Interviews/interview/filtre.html.twig',array('list'=>$resultattt));
*/
        $repository =$this->getDoctrine()->getManager()->getRepository(Temporaire_offres::class);
        $list = $repository->afficherOffresss($id);
        return $this->render('@Interviews/interview/afficheO.html.twig',array('list'=>$list));

    }

    public function ajouter_interviewAction( Request $request , OffresEnt $offre_id)
    {
        $interview = new Interview();
        $form = $this->createForm('InterviewsBundle\Form\InterviewType', $interview);
        $form->handleRequest($request);
        $interview->setOffre($offre_id);
        $interview->setEtat(1); //zedtha


        if ($form->isSubmitted() && $form->isValid()) {
            if ($interview->getDateEnt() > (new \DateTime('now'))) {

                $em = $this->getDoctrine()->getManager();
            $em->persist($interview);
            $em->flush();
           /* $request
                ->getSession()
                ->getFlashBag()
                ->add('ajoute', 'Le produit a bien été ajouté, vous pouvez en mettre un autre');*/
            return $this->redirectToRoute('afficherInterview', array('refEnt' => $interview->getRefent()));
        }
        else {
            $request
                ->getSession()
                ->getFlashBag()
                ->add('ajoute', 'La date doit etre superieur a la date actuelle');
            ;}

           /* return $this->redirectToRoute('afficherInterview', array('refEnt' => $interview->getRefent()));*/
        }

      /*  return $this->render('@Interviews/interview/ajout_interview.html.twig', array(*/
        return $this->render('@Interviews/interview/addTEST.html.twig', array(
            'interview' => $interview,
            'form' => $form->createView(),
        ));
    }

        public function afficherInterviewAction(){
            $user = $this->getUser();
            $id=$user->getId();
            $em = $this->getDoctrine()->getManager();//zedtha
            $em->getRepository('InterviewsBundle:Interview')->testdate();//zedtha
            $em->getRepository('InterviewsBundle:Interview')->testdate2();//zedtha

            if($user->getRoles()[0] == 'ROLE_USER') {

                $repository = $this->getDoctrine()->getManager()->getRepository(Temporaire_offres::class);
                $list = $repository->afficherEntretiensC($id);

                return $this->render('@Interviews/interview/afficherinterviewCTEST.html.twig', array('list' => $list));

            }

            elseif ( $user->getRoles()[0] == 'ROLE_ENTREPRISE' )
            {

                $repository = $this->getDoctrine()->getManager()->getRepository(Temporaire_offres::class);
                $list = $repository->afficherEntretienss($id);
                return $this->render('@Interviews/interview/afficheTest.html.twig', array('list' => $list));

            }

          /*  elseif ( $user->getRoles()[0] == 'ROLE_ENTREPRISE' )
            {
                $repository = $this->getDoctrine()->getManager()->getRepository(Temporaire_offres::class);
                $list = $repository->afficherEntretiens($id);
                return $this->render('@Interviews/interview/filtree.html.twig', array('list' => $list));

            }*/
        }

    public function modifierInterviewAction(Request $request, Interview $interview)
    {
        $editForm = $this->createForm('InterviewsBundle\Form\InterviewType', $interview);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($interview->getDateEnt() > (new \DateTime('now'))) {

                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('afficherInterview', array('refEnt' => $interview->getRefEnt()));
            }
            else {
                $request
                    ->getSession()
                    ->getFlashBag()
                    ->add('ajoute', 'La date doit etre superieur a la date actuelle');
                ;}
        }

        return $this->render('@Interviews/interview/modifTest.html.twig', array(
            'interview' => $interview,
            'edit_form' => $editForm->createView(),
        ));
    }

    public function deleteInterviewAction($refEnt)
    {
        $em = $this->getDoctrine()->getManager();
        $entretien = $em->getRepository( Interview::class)->find($refEnt);
      /*  $evaluation = $em->getRepository( Evaluation::class)->find($refEnt);*/
        $em->remove($entretien);
        $em->flush(); //valider la transaction
        return $this->redirectToRoute("afficherInterview");
    }



    public function add_evalAction(Request $request, $refEnt)
    {
        $em = $this->getDoctrine()->getManager();
        $Entretienss = $em->getRepository( Interview::class)->find($refEnt);
        $Evaluations= $em->getRepository( Evaluation::class)->findByRefEntretien($refEnt);
        if ($Evaluations){

            return $this->redirectToRoute('show_evalUnique', array('refEnt' => $refEnt));
        }
        else {
            $evaluation = new Evaluation();
            $form = $this->createForm('InterviewsBundle\Form\EvaluationType', $evaluation);
            $form->handleRequest($request);
            $evaluation->setRefEntretien($Entretienss);


            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($evaluation);
                $em->flush();

                return $this->redirectToRoute('show_evalUnique', array('refEnt' => $Entretienss->getRefEnt()));
            }


            return $this->render('@Interviews/interview/addeval.html.twig', array(
                'evaluation' => $evaluation,
                'form' => $form->createView(),
            ));
        }
    }

    public function show_evalAction()
    {
       /* $em = $this->getDoctrine()->getManager();
        $Evaluation = $em->getRepository( Evaluation::class)->findAll();
        return $this->render('@Interviews/interview/show_eval.html.twig', array("Evaluation"=>$Evaluation));*/
        $user = $this->getUser();
        $id=$user->getId();
        $repository =$this->getDoctrine()->getManager()->getRepository(Temporaire_offres::class);
        $list = $repository->Show_eval($id);
        return $this->render('@Interviews/interview/show_eval.html.twig',array('list'=>$list));

    }


    public function show_evalUniqueAction($refEnt)
    {

        $repository =$this->getDoctrine()->getManager()->getRepository(Temporaire_offres::class);
        $list = $repository->afficherEval($refEnt);
        return $this->render('@Interviews/interview/show_evalUnique.html.twig',array('list'=>$list));

    }

    public function edit_evalAction(Request $request, Evaluation $Evaluation)
    {
        $editForm = $this->createForm('InterviewsBundle\Form\EvaluationType', $Evaluation);
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $Evaluatio= $em->getRepository( Interview::class)->find($Evaluation->getRefEntretien());
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('show_evalUnique', array('refEnt' => $Evaluatio->getRefEnt()));
        }

        return $this->render('@Interviews/interview/edit_eval.html.twig', array(
            'Evaluation' => $Evaluation,
            'edit_form' => $editForm->createView(),
        ));
    }


    public function delete_evalAction(Evaluation $Evaluation)
    {
        $em = $this->getDoctrine()->getManager();
        $entretien = $em->getRepository( Evaluation::class)->findOneByRefEntretien($Evaluation->getRefEntretien());
        $Evaluatio= $em->getRepository( Interview::class)->find($Evaluation->getRefEntretien());

        $em->remove($entretien);
        $em->flush(); //valider la transaction
        return $this->redirectToRoute("afficherInterview");
    }


    public function refuserDemandeinterviewAction($offre_id)
    {
        $em = $this->getDoctrine()->getManager();
        $offre = $em->getRepository( OffresEnt::class)->find($offre_id);
        $em->remove($offre);
        $em->flush(); //valider la transaction
        return $this->redirectToRoute("affiches_offres");
    }



    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $user = $this->getUser();
        $idUser = $user->getId();

        $ent =  $em->getRepository('InterviewsBundle:Interview')->findEntitiesByString($requestString,$idUser);

        if (!$ent) {
            $result['ent']['error'] = "Entretien Introuvable ";
        } else  {
            $result['ent'] = $this->getRealEntities($ent);
        }
        return new Response(json_encode($result));

    }
    public function getRealEntities($ent){


        foreach ($ent as $ent){

            $Dates = $ent->getDateEnt();
        $Date_aff = $Dates->format('m/d/Y');
        $realEntities[$ent->getRefEnt()] = [$ent->getRefEnt(), $ent->getOffre()->getIdCondidat()->getUsername(), $ent->getOffre()->getPoste(), $ent->getHeureEnt(),$Date_aff];
        }
        return $realEntities;

    }









    public function search_evalAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $user = $this->getUser();
        $idUser = $user->getId();

        $ent =  $em->getRepository('InterviewsBundle:Evaluation')->findEntitiesByString($requestString);

        if (!$ent) {
            $result['ent']['error'] = " Condidat introuvable ";
        } else  {
            $result['ent'] = $this->getRealEntities_eval($ent);
        }
        return new Response(json_encode($result));

    }
    public function getRealEntities_eval($ent){


        foreach ($ent as $ent)

        $realEntities[$ent->getId()] = [$ent->getId(), $ent->getRefEntretien()->getOffre()->getIdCondidat()->getUsername(),$ent->getRefEntretien()->getRefEnt(), $ent->getEvaluation()];

        return $realEntities;

    }

    //////////////////////////search pour le condidat
    public function searchCAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $user = $this->getUser();
        $idUser = $user->getId();

        $ent =  $em->getRepository('InterviewsBundle:Interview')->findEntitiesByString_c($requestString,$idUser);

        if (!$ent) {
            $result['ent']['error'] = "Entretien introuvable ";
        } else  {
            $result['ent'] = $this->getRealEntities_C($ent);
        }
        return new Response(json_encode($result));

    }

    public function getRealEntities_C($ent){


        foreach ($ent as $ent)

            $Dates = $ent->getDateEnt();
        $Date_aff = $Dates->format('m/d/Y');
        $realEntities[$ent->getRefEnt()] = [$ent->getRefEnt(), $ent->getOffre()->getIdEntreprise()->getUsername(), $ent->getOffre()->getPoste(), $ent->getHeureEnt(),$Date_aff];

        return $realEntities;

    }

}
