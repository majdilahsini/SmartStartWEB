<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Investissement;
use ProjectBundle\Entity\Projet;
use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\Users;

/**
 * Projet controller.
 *
 */
class ProjetController extends Controller
{
    /**
     * Lists all projet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
$user=$this->getUser();
$id=$user->getId();

        $em->getRepository('ProjectBundle:Projet')->updateMontantEtat();
        $em->getRepository('ProjectBundle:Projet')->updateDate();
        $em->getRepository('ProjectBundle:Projet')->updateDatedebut();
        $projets = $em->getRepository('ProjectBundle:Projet')->findByidEntreprise($id);
        $topaimer = $em->getRepository('ProjectBundle:Projet')->topprojectaimer($id);
        return $this->render('projet/index.html.twig', array(
            'projets' => $projets,
            'proj' => $projets
        ));
    }
    public function domaineAction($domaine)
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $id=$user->getId();

        $projets = $em->getRepository('ProjectBundle:Projet')->findByidEntreprise($id);
        $projet = $em->getRepository('ProjectBundle:Projet')->domainePrpjet($domaine);
        $topaimer = $em->getRepository('ProjectBundle:Projet')->topprojectaimer($id);


        return $this->render('projet/index.html.twig', array(
            'proj' => $projets,
            'projets'=>$projet,
            'topaimer'=>$topaimer
        ));
    }



    public function indexallAction()
    {
        $user=$this->getUser();
$id=$user->getId();

        $em = $this->getDoctrine()->getManager();
        $em->getRepository('ProjectBundle:Projet')->updateMontantEtat();
        $em->getRepository('ProjectBundle:Projet')->updateDate();
        $em->getRepository('ProjectBundle:Projet')->updateDatedebut();
        $projets = $em->getRepository('ProjectBundle:Projet')->findProjet();
        $topp = $em->getRepository('ProjectBundle:Projet')->afficherProjetInvesstment($id);
        $topaimer = $em->getRepository('ProjectBundle:Projet')->topprojectaimer($id);


        return $this->render('projet/indexAll.html.twig', array(
            'projets' => $projets,
            'iduser'=> $id,
            'top'=>$topp,
            'topaimer'=>$topaimer
        ));
    }

    /**
     * Creates a new projet entity.
     *
     */
    public function newAction(Request $request)
    {$user=$this->getUser();

        $projet = new Projet();
        $form = $this->createForm('ProjectBundle\Form\ProjetType', $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $projet->setIdEntreprise($user);
            if($projet->getFile() == null) {
                $this->get('logger')->info("file is null");
            } else {
                $projet->uploadProfilePicture();
            }
            $projet->setIdEtat(1);
            $em->persist($projet);
            $em->flush();

            return $this->redirectToRoute('projet_show', array('idProjet' => $projet->getIdprojet()));
        }

        return $this->render('projet/new.html.twig', array(
            'projet' => $projet,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a projet entity.
     *
     */
    public function showAction(Projet $projet,Request $request)
    {

        $deleteForm = $this->createDeleteForm($projet);
        $em = $this->getDoctrine()->getManager();
        $id=$projet->getIdProjet();



        return $this->render('projet/show.html.twig', array(
            'projet' => $projet,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to edit an existing projet entity.
     *
     */
    public function editAction(Request $request, Projet $projet)
    {
        $deleteForm = $this->createDeleteForm($projet);
        $editForm = $this->createForm('ProjectBundle\Form\ProjetType', $projet);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em=$this->getDoctrine()->getManager();
            if($projet->getFile() == null) {
                $this->get('logger')->info("file is null");
            } else {
                $projet->uploadProfilePicture();
            }

            $em->persist($projet);
            $em->flush();

            return $this->redirectToRoute('projet_edit', array('idProjet' => $projet->getIdprojet()));
        }

        return $this->render('projet/edit.html.twig', array(
            'projet' => $projet,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a projet entity.
     *
     */
    public function deleteAction(Request $request, Projet $projet)
    {
        $form = $this->createDeleteForm($projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($projet);
            $em->flush();
        }

        return $this->redirectToRoute('projet_index');
    }

    /**
     * Creates a form to delete a projet entity.
     *
     * @param Projet $projet The projet entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Projet $projet)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projet_delete', array('idProjet' => $projet->getIdprojet())))
            ->setMethod('DELETE')
            ->getForm();

    }
    public function filtreProAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $user = $this->getUser();
        $idUser = $user->getId();

        $projt=  $em->getRepository('ProjectBundle:Projet')->findProjetattent();



        if (!$projt) {
            $result['ent']['error'] = "Post Not found :( ";
        } else  {
            $result['ent'] = $this->getRealEntities($projt);
        }
        return new Response(json_encode($result));

    }




    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $user = $this->getUser();
        $idUser = $user->getId();

        $projt=  $em->getRepository('ProjectBundle:Projet')->findEntitiesByString($requestString,$idUser);

        if (!$projt) {
            $result['ent']['error'] = "Post Not found :( ";
        } else  {
            $result['ent'] = $this->getRealEntities($projt);
        }
        return new Response(json_encode($result));

    }
    public function searchMAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $user = $this->getUser();
        $idUser = $user->getId();

        $projt=  $em->getRepository('ProjectBundle:Projet')->findEntitiesByStringmy($requestString,$idUser);

        if (!$projt) {
            $result['ent']['error'] = "Post Not found :( ";
        } else  {
            $result['ent'] = $this->getRealEntities($projt);
        }
        return new Response(json_encode($result));

    }
    public function getRealEntities($projts){

        $user = $this->getUser();
        $idUser = $user->getId();
        foreach ($projts as $projts) {
            $Dates = $projts->getDateDebutProjet();
            $Date_aff = $Dates->format('m/d/Y');
            $realEntities[$projts->getIdProjet()] = [$projts->getIdProjet(), $projts->getNomProjet(), $projts->getMontant(), $projts->getAdresseProjet(), $projts->getCompteBancaire(), $projts->getDescriptionProjet(), $projts->getEmailProjet(), $projts->getIdCategorie()->getNom(), $projts->getTelProjet(), $projts->getNbreTeam(), $projts->getVotreFinance(), $projts->getIdEntreprise()->getUsername(), $projts->getImage(), $Date_aff,$idUser];
        }
        return $realEntities;

    }

    public function messageadmineAction( $idProjet, Request $request)
    {   $user=$this->getUser();


        $https['ssl']['verify_peer'] = FALSE;
        $https['ssl']['verify_peer_name'] = FALSE;

        $transport = (new Swift_SmtpTransport('smtp.gmail.com',465,'ssl'))
            ->setUsername('racemcherni1@gmail.com')
            ->setPassword('Azerty1234567890')
        ;
        $mailer = new Swift_Mailer($transport);
        // $mailer=(new Swift_Mailer);




        $em = $this->getDoctrine()->getManager();




        $p=$em->getRepository(Projet::class)->find($idProjet);
        $ur=$em->getRepository(Users::class)->find($p->getIdEntreprise());

        $emailuser=$ur->getEmail();




        $message = (new \Swift_Message('Supprission projet'))
            ->setFrom('racemcherni1@gmail.com')
            ->setTo('koussay.sghaier@esprit.tn')
            ->setBody(
                "request de supprimer projet ".'<br>'."Nom Projet : ".$p->getNomProjet().'<br>'.'id projet :'.$idProjet,
                'text/html'
            )

            // you can remove the following code if you don't define a text version for your emails
            ->addPart(
                ""
            )
        ;

        $mailer->send($message);

        $deleteForm = $this->createDeleteForm($p);






        return $this->render('projet/show.html.twig', array(
            'projet' => $p,
            'delete_form' => $deleteForm->createView(),

        ));
    }








    public function filtredomAction($idEtat)
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $id=$user->getId();



        $projets = $em->getRepository('ProjectBundle:Projet')->findByidEntreprise($id);
        $projet = $em->getRepository('ProjectBundle:Projet')->findProjetEtat($id,$idEtat);

        return $this->render('projet/index.html.twig', array(
            'proj' => $projets,
            'projets'=>$projet,

        ));

    }








}
