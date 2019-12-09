<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Investissement;
use ProjectBundle\Entity\Projet as Projet;
use ProjectBundle\Entity\showInvesstir;
use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\Users;

class InvesstirController extends Controller
{
    public function showvisiteurAction(Projet $projet, Request $request)
    {
        $user=$this->getUser();
        $Investissement=new Investissement();

        $https['ssl']['verify_peer'] = FALSE;
        $https['ssl']['verify_peer_name'] = FALSE;

        $transport = (new Swift_SmtpTransport('smtp.gmail.com',465,'ssl'))
            ->setUsername('racemcherni1@gmail.com')
            ->setPassword('Azerty1234567890')
        ;
        $mailer = new Swift_Mailer($transport);
        // $mailer=(new Swift_Mailer);

        $form = $this->createForm('ProjectBundle\Form\InvestissementType', $Investissement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $id=$projet->getIdProjet();
            $montant=$Investissement->getMontant();
            $m=$projet->getMontant()+$montant;
            $em->getRepository(Projet::class)->updateMontant($id,$montant);
            $em->getRepository(Projet::class)->updateEtatProjet($id);
            $p=$em->getRepository(Projet::class)->find($id);
            $ur=$em->getRepository(Users::class)->find($p->getIdEntreprise());

            $emailuser=$ur->getEmail();

            $Investissement->setDateInvesstissement(new \DateTime('now'));

            $Investissement->setIdProjet($projet);
            $Investissement->setIdInvesstisseur($user);
            $message = (new \Swift_Message('racem bosss'))
                ->setFrom('houssem.eddine.yh@gmail.com')
                ->setTo(''.$emailuser)
                ->setBody(
                    "Nom Projet : ".$p->getNomProjet().'<br>'.'montant :'.$montant.'<br>'.'votre Solde :'.$m,
                    'text/html'
                )

                // you can remove the following code if you don't define a text version for your emails
                ->addPart(
                    ""
                )
            ;

            $mailer->send($message);

            $em->persist($Investissement);
            $em->flush();

            return $this->redirectToRoute('projet_show_visiteur_projet', array('idProjet' => $projet->getIdprojet()));
        }


        return $this->render('projet/affichevisiteurProjet.html.twig', array(
            'projet' => $projet,

            'formInv' => $form->createView()
        ));
    }
    
    public function affichInvestissementAction(){

        $user=$this->getUser();
        $id=$user->getId();
        $repository =$this->getDoctrine()->getManager()->getRepository(showInvesstir::class);
        $list = $repository->afficherMesInvesstment($id);


        return $this->render('projet/filtre.html.twig',array('list'=>$list));
    }






    public function affichInvestissementMesProjetAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $user=$this->getUser();
        $id=$user->getId();
        $repository =$this->getDoctrine()->getManager()->getRepository(showInvesstir::class);
        $list = $repository->afficherMesProjetInvesstment($id);


        return $this->render('projet/filtre.html.twig',array('list'=>$list));




    }







}
