<?php

namespace FormationBundle\Controller;

use FormationBundle\Entity\Formations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

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

        $formations = $em->getRepository('FormationBundle:Formations')->findByentreprise($id);

        return $this->render('formations/index.html.twig', array(
            'formations' => $formations,
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
        $em = $this->getDoctrine()->getManager();

        $formations = $em->getRepository('FormationBundle:Formations')->findAll();

        return $this->render('formations/index.html.twig', array(
            'formations' => $formations,
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
        $formation = new Formations();
        $form = $this->createForm('FormationBundle\Form\FormationsType', $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $formation->setEntreprise($user);
            $formation->uploadProfilePicture();


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
           $em->persist($formation);
            $em->flush();
            return $this->redirectToRoute('formations_edit', array('ref' => $formation->getRef()));
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
}
