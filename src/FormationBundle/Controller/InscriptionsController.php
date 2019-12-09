<?php

namespace FormationBundle\Controller;

use FormationBundle\Entity\Formations;
use FormationBundle\Entity\Inscriptions;
use FormationBundle\Entity\temporaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twilio\Rest\Client;

/**
 * Inscriptions controller.
 *
 * @Route("inscriptions")
 */
class InscriptionsController extends Controller {

    public function affichallFormationsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user=$this->getUser();
        $id=$user->getId();


        $inscription =$em->getRepository('FormationBundle:temporaire')->idddinscription($id );

        $totaldomaines =$em->getRepository('FormationBundle:temporaire')->totaldomaines();
        $ins =$em->getRepository('FormationBundle:temporaire')->totalformation();
        $formations = $em->getRepository('FormationBundle:Formations')->findAll();

        return $this->render('inscriptions/affichformations.html.twig', array(
            'formations' => $formations,'domain'=>$formations,'total'=>$ins,'totaldomaines'=>$totaldomaines,'inscription'=>$inscription,

        ));
    }

    public function domaineAction($domaine) {
        $em =$this->getDoctrine()->getManager();
        $user=$this->getUser();
        $id=$user->getId();
        $totaldomaines =$em->getRepository('FormationBundle:temporaire')->totaldomaines();
        $ins =$em->getRepository('FormationBundle:temporaire')->totalformation();
        $formations= $em->getRepository('FormationBundle:Formations')->findAll();
        $inscri = $em->getRepository('FormationBundle:Formations')->afficherpardomaine($domaine);
        $inscription =$em->getRepository('FormationBundle:temporaire')->idddinscription($id );
        return $this->render('inscriptions/affichformations.html.twig',array(
            'domain'=>$formations,'total'=>$ins,'totaldomaines'=>$totaldomaines,'inscription'=>$inscription,
            'formations'=>$inscri,
        ));
    }
    /**
     * Finds and displays a formation entity.
     *
     * @Route("/{ref}", name="formations_show_all")
     * @Method("GET")
     */
    public function showallFormationsAction(Formations $formation , Request $request)
    {
        $ref=$formation->getRef();
        $user = $this->getUser();
        $id = $user->getId();
        $count2 = 0;
        $currentdate = new \DateTime('now');
        $inscription = new Inscriptions();
        $form = $this->createForm('FormationBundle\Form\InscriptionsType', $inscription);
        $em = $this->getDoctrine()->getManager();
        $count2 = $em->getRepository(temporaire::class)->checkifpostuler($id,$ref);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $inscription->setFormationRef($formation);
            $inscription->setDatecreation($currentdate);
            $inscription->setEtat(1);
            //  $count2 = $em->getRepository(temporaire::class)->checkifpostuler($id,$inscription->getFormationRef());
            $inscription->setUser($user);

            $em->persist($inscription);
            $em->flush();

            return $this->redirectToRoute('formations_affich_all', array('id' => $inscription->getId()));
        }
        return $this->render('inscriptions/showformation.html.twig', array(
            'formation' => $formation,'count2'=>$count2,
            'form_inscip' => $form->createView(),
            'date'=>$currentdate



        ));
    }

    private function createDeleteForm(Formations $formation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formations_delete', array('ref' => $formation->getRef())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
    /*   public function inscrireAction(Request $request)
       {
           $user = $this->getUser();
           $inscription = new Inscriptions();
           $form = $this->createForm('FormationBundle\Form\InscriptionsType', $inscription);
           $form->handleRequest($request);

           if ($form->isSubmitted() && $form->isValid()) {
               $em = $this->getDoctrine()->getManager();



               $em->persist($inscription);
               $em->flush();

               return $this->redirectToRoute('inscription_show', array('id' => $inscription->getId()));
           }

           return $this->render('formations/showall.html.twig', array(
               'inscription' => $inscription,
               'form_inscip' => $form->createView(),
           ));
       }*/

    public function affichInscriAction(){
        $user = $this->getUser();
        $id=$user->getId();
        $repository =$this->getDoctrine()->getManager()->getRepository(temporaire::class);
        $list = $repository->afficherInscription($id);
        return $this->render('formations/filtre.html.twig',array('list'=>$list));




    }
    public function etataccepteAction($id) {
        $f=new Formations();
        $em=$this->getDoctrine()->getManager();
        $em->getRepository(temporaire::class)->ajoutEtat($id);
        $incript= $em->getRepository(Inscriptions::class)->find($id);
        $idf=$incript->getFormationRef()->getRef();
        $em->getRepository(temporaire::class)->ajoutNbre($idf);







        $user = $this->getUser();
        $id=$user->getId();
        $repository =$em->getRepository(temporaire::class);
        $list = $repository->afficherInscription($id);
        return $this->render('formations/filtre.html.twig',array('list'=>$list));





    }
    public function etatrefuseAction($id) {
        $em=$this->getDoctrine()->getManager();
        $em->getRepository(temporaire::class)->ajoutEtatt($id);





        $user = $this->getUser();
        $id=$user->getId();
        $repository =$em->getRepository(temporaire::class);
        $list = $repository->afficherInscription($id);
        return $this->render('formations/filtre.html.twig',array('list'=>$list));





    }
    public function affichmesformationsacceptesAction(){
        $user = $this->getUser();
        $id=$user->getId();
        $repository =$this->getDoctrine()->getManager()->getRepository(temporaire::class);
        $list = $repository->affichermesformationsinscriptions($id);
        return $this->render('formations/formationsinscrits.html.twig',array('list'=>$list));




    }
    public function searchuserAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $user = $this->getUser();
        $idUser = $user->getId();

        $ent =  $em->getRepository('FormationBundle:temporaire')->findEntitiesByStrin($requestString);

        if (!$ent) {
            $result['ent']['error'] = "Formation n'exicte pas :( ";
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
        $realEntities[$for->getRef()] = [$for->getRef(),$for->getImage(),$for->getNom(),$for->getEntreprise()->getUsername(),$for->getDomaine()->getNomDomaine(),$Datedeb,$datefin,$for->getDuree()];

        return $realEntities;

    }
    /**
     * send sms reclamation entities.
     *
     * @Route("/{id}/sendsms", name="formation_smsfromadmin")
     * @Method("GET")
     */

    public function sendsmsAction(Request $request, Inscriptions $rec)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $id = $user->getId();

        $inscription =$em->getRepository('FormationBundle:temporaire')->idddinscription($id );
        $sid    = "AC93d52324cba1b10f5ca7726421b05652";
        $token  = "d8812d7a4a8864ccc9f7899a38f3abb3";
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
            ->create("+21696872895", // to
                array(
                    "body" => 'on a accepte votre demande de inscription au formation'.$rec->getFormationRef()->getNom(),
                    "from" => "+17472290132"

                )
            );
        return $this->redirectToRoute('inscrip_affich_all');
    }
}