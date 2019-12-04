<?php

namespace InterviewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temporaire_offres
 *
 * @ORM\Table(name="temporaire_offres")
 * @ORM\Entity(repositoryClass="InterviewsBundle\Repository\Temporaire_offresRepository")
 */
class Temporaire_offres
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lettre_motivation", type="string", length=200)
     */
    private $lettreMotivation;

    /**
     * @var string
     *
     * @ORM\Column(name="poste", type="string", length=50)
     */
    private $poste;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=180)
     */
    private $username;

    /**
     * @var int
     *
     * @ORM\Column(name="id_entreprise", type="integer")
     */
    private $idEntreprise;

    /**
     * @var int
     *
     * @ORM\Column(name="id_condidat", type="integer")
     */
    private $idCondidat;

    /**
     * @var int
     *
     * @ORM\Column(name="offre_id", type="integer")
     */
    private $offreId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lettreMotivation
     *
     * @param string $lettreMotivation
     *
     * @return Temporaire_offres
     */
    public function setLettreMotivation($lettreMotivation)
    {
        $this->lettreMotivation = $lettreMotivation;

        return $this;
    }

    /**
     * Get lettreMotivation
     *
     * @return string
     */
    public function getLettreMotivation()
    {
        return $this->lettreMotivation;
    }

    /**
     * Set poste
     *
     * @param string $poste
     *
     * @return Temporaire_offres
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Temporaire_offres
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set idEntreprise
     *
     * @param integer $idEntreprise
     *
     * @return Temporaire_offres
     */
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get idEntreprise
     *
     * @return int
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Set idCondidat
     *
     * @param integer $idCondidat
     *
     * @return Temporaire_offres
     */
    public function setIdCondidat($idCondidat)
    {
        $this->idCondidat = $idCondidat;

        return $this;
    }

    /**
     * Get idCondidat
     *
     * @return int
     */
    public function getIdCondidat()
    {
        return $this->idCondidat;
    }

    /**
     * @return int
     */
    public function getOffreId()
    {
        return $this->offreId;
    }

    /**
     * @param int $offreId
     */
    public function setOffreId($offreId)
    {
        $this->offreId = $offreId;
    }


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ent", type="date", nullable=false)
     */
    private $date_ent;

    /**
     * @var int
     *
     * @ORM\Column(name="ref_ent", type="integer")
     */
    private $ref_ent;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_ent", type="string", length=50)
     */
    private $heure_ent;

    /**
     * @return \DateTime
     */
    public function getDateEnt()
    {
        return $this->date_ent;
    }

    /**
     * @param \DateTime $date_ent
     */
    public function setDateEnt($date_ent)
    {
        $this->date_ent = $date_ent;
    }

    /**
     * @return int
     */
    public function getRefEnt()
    {
        return $this->ref_ent;
    }

    /**
     * @param int $ref_ent
     */
    public function setRefEnt($ref_ent)
    {
        $this->ref_ent = $ref_ent;
    }

    /**
     * @return string
     */
    public function getHeureEnt()
    {
        return $this->heure_ent;
    }

    /**
     * @param string $heure_ent
     */
    public function setHeureEnt($heure_ent)
    {
        $this->heure_ent = $heure_ent;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="ref_entretien", type="integer")
     */
    private $ref_entretien;

    /**
     * @return int
     */
    public function getRefEntretien()
    {
        return $this->ref_entretien;
    }

    /**
     * @param int $ref_entretien
     */
    public function setRefEntretien($ref_entretien)
    {
        $this->ref_entretien = $ref_entretien;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="evaluation", type="string", length=50)
     */
    private $evaluation;

    /**
     * @return string
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * @param string $evaluation
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;
    }



    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }


}

