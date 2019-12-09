<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\Forumsujet;
use ForumBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Forumsujet controller.
 *
 * @Route("forumsujet")
 */
class ForumsujetController extends Controller
{
    /**
     * Lists all forumsujet entities.
     *
     * @Route("/", name="forumsujet_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $forumsujets = $em->getRepository('ForumBundle:Forumsujet')->findAll();

        return $this->render('forumsujet/index.html.twig', array(
            'forumsujets' => $forumsujets,
        ));
    }

    /**
     * Creates a new forumsujet entity.
     *
     * @Route("/new", name="forumsujet_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {


        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $user1=new Users();
        $user1= $this->getDoctrine()->getRepository(Users::class) ->find($user->getId());

        $forumsujet = new Forumsujet();
        $form = $this->createForm('ForumBundle\Form\ForumsujetType', $forumsujet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $forumsujet->setIdUser($user1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($forumsujet);
            $em->flush();

            return $this->redirectToRoute('forumsujet_show', array('idSujet' => $forumsujet->getIdsujet()));
        }

        return $this->render('forumsujet/new.html.twig', array(
            'forumsujet' => $forumsujet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a forumsujet entity.
     *
     * @Route("/{idSujet}", name="forumsujet_show")
     * @Method("GET")
     */
    public function showAction(Forumsujet $forumsujet)
    {
        $deleteForm = $this->createDeleteForm($forumsujet);

        return $this->render('forumsujet/show.html.twig', array(
            'forumsujet' => $forumsujet,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing forumsujet entity.
     *
     * @Route("/{idSujet}/edit", name="forumsujet_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Forumsujet $forumsujet)
    {
        $deleteForm = $this->createDeleteForm($forumsujet);
        $editForm = $this->createForm('ForumBundle\Form\ForumsujetType', $forumsujet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('forumsujet_edit', array('idSujet' => $forumsujet->getIdsujet()));
        }

        return $this->render('forumsujet/edit.html.twig', array(
            'forumsujet' => $forumsujet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a forumsujet entity.
     *
     * @Route("/{idSujet}", name="forumsujet_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Forumsujet $forumsujet)
    {
        $form = $this->createDeleteForm($forumsujet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($forumsujet);
            $em->flush();
        }

        return $this->redirectToRoute('forumsujet_index');
    }

    /**
     * Creates a form to delete a forumsujet entity.
     *
     * @param Forumsujet $forumsujet The forumsujet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Forumsujet $forumsujet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('forumsujet_delete', array('idSujet' => $forumsujet->getIdsujet())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
