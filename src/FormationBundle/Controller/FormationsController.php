<?php

namespace FormationBundle\Controller;

use FormationBundle\Entity\Formations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Rest\Client;

/**
 * Formation controller.
 *
 * @Route("formations")
 */
class FormationsController extends Controller
{
    /**
     * Lists all formation entities.
     *
     * @Route("/", name="formations_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $id = $user->getId();
        $em = $this->getDoctrine()->getManager();
        $k = $this->getDoctrine()->getManager();

        $formations = $em->getRepository('FormationBundle:Formations')->findByentreprise($id);
        $em->getRepository('FormationBundle:Formations')->testdate();
        $em->getRepository('FormationBundle:Formations')->testnombre();
        $k->getRepository('FormationBundle:Formations')->findByentreprise($id);
        $top=  $k->getRepository('FormationBundle:Formations')->topthreee($id);


        return $this->render('formations/index.html.twig', array(
            'formations' => $formations,'top' => $top,
        ));
    }

    /**
     * Lists all formation entities.
     *
     * @Route("/", name="formations_index_all")
     * @Method("GET")
     */
    public function indexallAction()
    {

        $user = $this->getUser();
        $id = $user->getId();
        $em = $this->getDoctrine()->getManager();

        $formations = $em->getRepository('FormationBundle:Formations')->findAll();

        return $this->render('formations/indexall.html.twig', array(
            'formations' => $formations,'id' =>$id,
        ));
    }
    /**
     * Creates a new formation entity.
     *
     * @Route("/new", name="formations_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = $this->getUser();
        $currentdate = new \DateTime('now');

        $formation = new Formations();
        $form = $this->createForm('FormationBundle\Form\FormationsType', $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $formation->setEntreprise($user);
            $formation->uploadProfilePicture();
            $formation->setEtatFormation(1);
            $formation->setEtatNombres(1);
            $formation->setDatecreationformation($currentdate);


            $em->persist($formation);
            $em->flush();


            return $this->redirectToRoute('formations_show', array('ref' => $formation->getRef()));
        }

        return $this->render('formations/new.html.twig', array(
            'formation' => $formation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a formation entity.
     *
     * @Route("/{ref}", name="formations_show")
     * @Method("GET")
     */
    public function showAction(Formations $formation)
    {
        $deleteForm = $this->createDeleteForm($formation);

        return $this->render('formations/show.html.twig', array(
            'formation' => $formation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing formation entity.
     *
     * @Route("/{ref}/edit", name="formations_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Formations $formation)
    {

        $user = $this->getUser();
        $deleteForm = $this->createDeleteForm($formation);
        $editForm = $this->createForm('FormationBundle\Form\FormationsType', $formation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $formation->uploadProfilePicture();
            $formation->setFile($this->newAction($request));
           $em->persist($formation);
            $em->flush();
            return $this->redirectToRoute('formations_show', array('ref' => $formation->getRef()));
        }

        return $this->render('formations/edit.html.twig', array(
            'formation' => $formation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a formation entity.
     *
     * @Route("/{ref}", name="formations_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Formations $formation)
    {
        $form = $this->createDeleteForm($formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formation);
            $em->flush();
        }

        return $this->redirectToRoute('formations_index');
    }

    /**
     * Creates a form to delete a formation entity.
     *
     * @param Formations $formation The formation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Formations $formation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formations_delete', array('ref' => $formation->getRef())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $user = $this->getUser();
        $idUser = $user->getId();

        $ent =  $em->getRepository('FormationBundle:Formations')->findEntitiesByString($requestString,$idUser);

        if (!$ent) {
            $result['ent']['error'] = "Formation n'excite pas ";
        } else  {
            $result['ent'] = $this->getRealEntities($ent);
        }
        return new Response(json_encode($result));

    }
    public function getRealEntities($for){


        foreach ($for as $for)
            $Datedeb = $for->getDateDebut();
        $datefin = $for->getDateFin();
        $Datedeb = $Datedeb->format('m/d/Y');
        $datefin = $datefin->format('m/d/Y');
        $realEntities[$for->getRef()] = [$for->getRef(),$for->getNom(),$for->getDomaine()->getNomDomaine(),$for->getDescription(),$for->getDuree(), $for->getNombres(),$Datedeb,$datefin];

        return $realEntities;

    }
    public function searchallAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');


        $ent =  $em->getRepository('FormationBundle:Formations')->findEntities($requestString);

        if (!$ent) {
            $result['ent']['error'] = "Formation n'excite pas ";
        } else  {
            $result['ent'] = $this->getRealEntities($ent);
        }
        return new Response(json_encode($result));

    }


    public function trouverdomaineAction($domaine){
        $repository =$this->getDoctrine()->getManager()->getRepository(Formations::class);
        $formations = $repository->afficherpardomaine($domaine);
        return $this->render('formations/affichall.html.twig',array('formations' => $formations));
    }

    public function contactAction(){


    }
    public function showallAction(Formations $formation)
    {
        $deleteForm = $this->createDeleteForm($formation);

        return $this->render('formations/showallformations.html.twig', array(
            'formation' => $formation,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function listinscritsAction(Request $request){

        $user = $this->getUser();
        $id = $user->getId();
        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('FormationBundle:temporaire')->listinscrits($id);
        $listinscrits  = $this->get('knp_paginator')->paginate(
            $list,
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            3/*nbre d'éléments par page*/
        );
        return $this->render('formations/listinscrits.html.twig', array(
            'list'=>$listinscrits,
        ));

    }







}
