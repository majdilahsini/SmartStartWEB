<?php

namespace Reclamation1Bundle\Controller;

use Reclamation1Bundle\Entity\Reclamation;
use Reclamation1Bundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reclamation controller.
 *
 * @Route("reclamation")
 */
class ReclamationController extends Controller
{
    /**
     * Lists all reclamation entities.
     *
     * @Route("/", name="reclamation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reclamations = $em->getRepository('Reclamation1Bundle:Reclamation')->findAll();

        return $this->render('reclamation/index.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }

    /**
     * Lists all reclamation entities.
     *
     * @Route("/indexuser", name="reclamation_indexuser")
     * @Method("GET")
     */
    public function indexuserAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $reclamations = $em->getRepository('Reclamation1Bundle:Reclamation')->findby(array('idUser'=>$user->getid()));
        return $this->render('reclamation/index.html.twig', array(
            'reclamations' => $reclamations,
        ));
    }
    /**
     * Lists all reclamation entities.
     *
     * @Route("/recall", name="reclamation_all")
     * @Method("GET")
     */
    public function rdvallAction(Request $request)
    {  $response = new JsonResponse();

        $mar=array();

        $em = $this->getDoctrine()->getManager();
        $rappelrdvs =  $em->getRepository('Reclamation1Bundle:Reclamation')->findall();
        if(!$rappelrdvs) {
            $mar = "Aucun rappel ";
        } else {
            $mar= $this->getRealEntitiesall($rappelrdvs);
        }

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response->setData(array('reclamation'=>$mar));



    }
    public function getRealEntitiesall($rappelrdvs){
        foreach ($rappelrdvs as $i => $item){
            $realEntities[$i] = ['id'=>$rappelrdvs[$i]->getId(),'Subject'=>$rappelrdvs[$i]->getSubject(),'Object'=>$rappelrdvs[$i]->getObject(),'id_user'=>$rappelrdvs[$i]->getIdUser()->getUsername()];

        }
        return $realEntities;
    }






    /**
     * Lists all reclamation entities.
     *
     * @Route("/subjectjax/{nom}", name="reclamation_subject")
     * @Method("GET")
     */
    public function subjectjaxAction($nom)
    {



        $response = new JsonResponse();

        $mar=array();

        $em = $this->getDoctrine()->getManager();
        $rappelrdvs =  $em->getRepository('Reclamation1Bundle:Reclamation')->findBy(array('subject'=>$nom));
        if(!$rappelrdvs) {
            $mar = "Aucun rappel ";
        } else {
            $mar= $this->getRealEntitiesall($rappelrdvs);
        }

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response->setData(array('reclamation'=>$mar));


    }


    public function getRealEntitiess($rappelrdvs){
        foreach ($rappelrdvs as $i => $item){
            $realEntities[$i] = ['id'=>$rappelrdvs[$i]->getId(),'Subject'=>$rappelrdvs[$i]->getSubject(),'Object'=>$rappelrdvs[$i]->getObject(),'id_user'=>$rappelrdvs[$i]->getIdUser()->getUsername()];

        }
        return $realEntities;
    }






    /**
     * Creates a new reclamation entity.
     *
     * @Route("/new", name="reclamation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $user1=new Users();
        $user1= $this->getDoctrine()->getRepository(Users::class) ->find($user->getId());

        $reclamation = new Reclamation();
        $form = $this->createForm('Reclamation1Bundle\Form\ReclamationType', $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $reclamation->setIdUser($user1);
            $em->persist($reclamation);
            $em->flush();

            return $this->redirectToRoute('reclamation_show', array('id' => $reclamation->getId()));
        }

        return $this->render('reclamation/new.html.twig', array(
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reclamation entity.
     *
     * @Route("/{id}", name="reclamation_show")
     * @Method("GET")
     */
    public function showAction(Reclamation $reclamation)
    {

        $deleteForm = $this->createDeleteForm($reclamation);

        return $this->render('reclamation/show.html.twig', array(
            'reclamation' => $reclamation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reclamation entity.
     *
     * @Route("/{id}/edit", name="reclamation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reclamation $reclamation)
    {
        $deleteForm = $this->createDeleteForm($reclamation);
        $editForm = $this->createForm('Reclamation1Bundle\Form\ReclamationType', $reclamation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamation_edit', array('id' => $reclamation->getId()));
        }

        return $this->render('reclamation/edit.html.twig', array(
            'reclamation' => $reclamation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reclamation entity.
     *
     * @Route("/{id}/delete", name="reclamation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reclamation $reclamation)
    {
        $form = $this->createDeleteForm($reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reclamation);
            $em->flush();
        }

        return $this->redirectToRoute('reclamation_index');
    }

    /**
     * Creates a form to delete a reclamation entity.
     *
     * @param Reclamation $reclamation The reclamation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reclamation $reclamation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reclamation_delete', array('id' => $reclamation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
