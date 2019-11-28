<?php

namespace OffreBundle\Controller;

use OffreBundle\Entity\Offres;
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
            return $this->render('@Offre/Client/read.html.twig', array(
                'offres' => $offres,
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
        $offre = new Offres();
        $user = $this->getUser();

        $form = $this->createForm(OffresType::class, $offre);
        $form = $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $offre->setEntreprise($user);
            $em->persist($offre);
            $em->flush();
        }
        return $this->render('@Offre/Entreprise/ajouter.html.twig', array('form' => $form->createView()));
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
    public function editAction(Request $request, Offres $offre)
    {
        $deleteForm = $this->createDeleteForm($offre);
        $editForm = $this->createForm('OffreBundle\Form\OffresType', $offre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('offres_edit', array('id' => $offre->getId()));
        }

        return $this->render('offres/edit.html.twig', array(
            'offre' => $offre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a offre entity.
     *
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $offre= $em->getRepository(Offres::class)->find($id);
        $em->remove($offre);
        $em->flush();
        return $this->redirectToRoute('offres_index');

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
}
