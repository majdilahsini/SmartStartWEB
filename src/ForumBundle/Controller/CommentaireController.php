<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\Commentaire;
use ForumBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Commentaire controller.
 *
 * @Route("commentaire")
 */
class CommentaireController extends Controller
{
    /**
     * Lists all commentaire entities.
     *
     * @Route("/c/{idSujet}", name="commentaire_index_com")
     * @Method("GET")
     */
    public function indexComAction($idSujet)
    {
        $em = $this->getDoctrine()->getManager();
        $commentaires =  $em->getRepository('ForumBundle:Commentaire')->findBy(array('idSujet'=>$idSujet));

        //$commentaires = $em->getRepository('ForumBundle:Commentaire')->findAll();

        return $this->render('commentaire/showcomentaire.html.twig', array(
            'commentaires' => $commentaires,
        ));
    }

    /**
     * Lists all commentaire entities.
     *
     * @Route("/", name="commentaire_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commentaires = $em->getRepository('ForumBundle:Commentaire')->findAll();

        return $this->render('commentaire/index.html.twig', array(
            'commentaires' => $commentaires,
        ));
    }
    /**
     * Lists all commentaire entities.
     *
     * @Route("/indexuser", name="commentaire_indexuser")
     * @Method("GET")
     */
    public function indexuserAction()
    {$user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $commentaires = $em->getRepository('ForumBundle:Commentaire')->findby(array('idUser'=>$user->getId()));

        return $this->render('commentaire/index.html.twig', array(
            'commentaires' => $commentaires,
        ));
    }



    /**
     * Lists all reclamation entities.
     *
     * @Route("/commantaireall", name="commantaire_all")
     * @Method("GET")
     */
    public function commantaireAction(Request $request)
    {  $response = new JsonResponse();

        $mar=array();

        $em = $this->getDoctrine()->getManager();
        $rappelrdvs =  $em->getRepository('ForumBundle:Commentaire')->findall();
        if(!$rappelrdvs) {
            $mar = "Aucun rappel ";
        } else {
            $mar= $this->getRealEntitiesall($rappelrdvs);
        }

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response->setData(array('commantaire'=>$mar));



    }
    public function getRealEntitiesall($rappelrdvs){
        foreach ($rappelrdvs as $i => $item){
            $realEntities[$i] = ['id'=>$rappelrdvs[$i]->getIdCommentaire(),'commantaire'=>$rappelrdvs[$i]->getCommentaire(),'sujet'=>$rappelrdvs[$i]->getIdSujet()->getSujet(),'username'=>$rappelrdvs[$i]->getIdUser()->getUsername()];

        }
        return $realEntities;
    }






    /**
     * Lists all reclamation entities.
     *
     * @Route("/commantaireajax/{nom}", name="commantaires_nom")
     * @Method("GET")
     */
    public function commantairejaxAction($nom)
    {



        $response = new JsonResponse();

        $mar=array();

        $em = $this->getDoctrine()->getManager();
        $rappelrdvs =  $em->getRepository('ForumBundle:Commentaire')->findBy(array('commentaire'=>$nom));
        if(!$rappelrdvs) {
            $mar = "Aucun rappel ";
        } else {
            $mar= $this->getRealEntitiesall($rappelrdvs);
        }

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response->setData(array('commantaire'=>$mar));


    }


    public function getRealEntitiess($rappelrdvs){
        foreach ($rappelrdvs as $i => $item){
            $realEntities[$i] = ['id'=>$rappelrdvs[$i]->getId(),'Subject'=>$rappelrdvs[$i]->getSubject(),'Object'=>$rappelrdvs[$i]->getObject(),'id_user'=>$rappelrdvs[$i]->getIdUser()->getUsername()];

        }
        return $realEntities;
    }






    /**
     * Creates a new commentaire entity.
     *
     * @Route("/new", name="commentaire_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {


        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $user1=new Users();
        $user1= $this->getDoctrine()->getRepository(Users::class) ->find($user->getId());
        $commentaire = new Commentaire();
        $form = $this->createForm('ForumBundle\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setIdUser($user1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();

            return $this->redirectToRoute('commentaire_show', array('idCommentaire' => $commentaire->getIdcommentaire()));
        }

        return $this->render('commentaire/new.html.twig', array(
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a commentaire entity.
     *
     * @Route("/{idCommentaire}", name="commentaire_show")
     * @Method("GET")
     */
    public function showAction(Commentaire $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);

        return $this->render('commentaire/show.html.twig', array(
            'commentaire' => $commentaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commentaire entity.
     *
     * @Route("/{idCommentaire}/edit", name="commentaire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Commentaire $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);
        $editForm = $this->createForm('ForumBundle\Form\CommentaireType', $commentaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commentaire_edit', array('idCommentaire' => $commentaire->getIdcommentaire()));
        }

        return $this->render('commentaire/edit.html.twig', array(
            'commentaire' => $commentaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commentaire entity.
     *
     * @Route("/{idCommentaire}", name="commentaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Commentaire $commentaire)
    {
        $form = $this->createDeleteForm($commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commentaire);
            $em->flush();
        }

        return $this->redirectToRoute('commentaire_index');
    }

    /**
     * Creates a form to delete a commentaire entity.
     *
     * @param Commentaire $commentaire The commentaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commentaire $commentaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentaire_delete', array('idCommentaire' => $commentaire->getIdcommentaire())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
