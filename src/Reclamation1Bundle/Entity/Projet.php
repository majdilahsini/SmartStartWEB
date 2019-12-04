<?php

namespace Reclamation1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet", indexes={@ORM\Index(name="ck_projet1", columns={"id_enterprise"})})
 * @ORM\Entity
 */
class Projet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_projet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_projet", type="string", length=20, nullable=false)
     */
    private $nomProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=20, nullable=false)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="paye", type="string", length=20, nullable=false)
     */
    private $paye;

    /**
     * @var float
     *
     * @ORM\Column(name="votre_finance", type="float", precision=10, scale=0, nullable=false)
     */
    private $votreFinance;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_contributeur", type="integer", nullable=false)
     */
    private $nbreContributeur;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="compte_bancaire", type="integer", nullable=false)
     */
    private $compteBancaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin-projet", type="date", nullable=false)
     */
    private $dateFinProjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_projet", type="date", nullable=false)
     */
    private $dateDebutProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_projet", type="string", length=250, nullable=false)
     */
    private $adresseProjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel_projet", type="integer", nullable=false)
     */
    private $telProjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_team", type="integer", nullable=false)
     */
    private $nbreTeam;

    /**
     * @var string
     *
     * @ORM\Column(name="description_projet", type="string", length=200, nullable=false)
     */
    private $descriptionProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="email_projet", type="string", length=50, nullable=false)
     */
    private $emailProjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_enterprise", type="integer", nullable=false)
     */
    private $idEnterprise;



    /**
     * Get idProjet
     *
     * @return integer
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set nomProjet
     *
     * @param string $nomProjet
     *
     * @return Projet
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;
    
        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Projet
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set paye
     *
     * @param string $paye
     *
     * @return Projet
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;
    
        return $this;
    }

    /**
     * Get paye
     *
     * @return string
     */
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * Set votreFinance
     *
     * @param float $votreFinance
     *
     * @return Projet
     */
    public function setVotreFinance($votreFinance)
    {
        $this->votreFinance = $votreFinance;
    
        return $this;
    }

    /**
     * Get votreFinance
     *
     * @return float
     */
    public function getVotreFinance()
    {
        return $this->votreFinance;
    }

    /**
     * Set nbreContributeur
     *
     * @param integer $nbreContributeur
     *
     * @return Projet
     */
    public function setNbreContributeur($nbreContributeur)
    {
        $this->nbreContributeur = $nbreContributeur;
    
        return $this;
    }

    /**
     * Get nbreContributeur
     *
     * @return integer
     */
    public function getNbreContributeur()
    {
        return $this->nbreContributeur;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Projet
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set compteBancaire
     *
     * @param integer $compteBancaire
     *
     * @return Projet
     */
    public function setCompteBancaire($compteBancaire)
    {
        $this->compteBancaire = $compteBancaire;
    
        return $this;
    }

    /**
     * Get compteBancaire
     *
     * @return integer
     */
    public function getCompteBancaire()
    {
        return $this->compteBancaire;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Projet
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    
        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set dateFinProjet
     *
     * @param \DateTime $dateFinProjet
     *
     * @return Projet
     */
    public function setDateFinProjet($dateFinProjet)
    {
        $this->dateFinProjet = $dateFinProjet;
    
        return $this;
    }

    /**
     * Get dateFinProjet
     *
     * @return \DateTime
     */
    public function getDateFinProjet()
    {
        return $this->dateFinProjet;
    }

    /**
     * Set dateDebutProjet
     *
     * @param \DateTime $dateDebutProjet
     *
     * @return Projet
     */
    public function setDateDebutProjet($dateDebutProjet)
    {
        $this->dateDebutProjet = $dateDebutProjet;
    
        return $this;
    }

    /**
     * Get dateDebutProjet
     *
     * @return \DateTime
     */
    public function getDateDebutProjet()
    {
        return $this->dateDebutProjet;
    }

    /**
     * Set adresseProjet
     *
     * @param string $adresseProjet
     *
     * @return Projet
     */
    public function setAdresseProjet($adresseProjet)
    {
        $this->adresseProjet = $adresseProjet;
    
        return $this;
    }

    /**
     * Get adresseProjet
     *
     * @return string
     */
    public function getAdresseProjet()
    {
        return $this->adresseProjet;
    }

    /**
     * Set telProjet
     *
     * @param integer $telProjet
     *
     * @return Projet
     */
    public function setTelProjet($telProjet)
    {
        $this->telProjet = $telProjet;
    
        return $this;
    }

    /**
     * Get telProjet
     *
     * @return integer
     */
    public function getTelProjet()
    {
        return $this->telProjet;
    }

    /**
     * Set nbreTeam
     *
     * @param integer $nbreTeam
     *
     * @return Projet
     */
    public function setNbreTeam($nbreTeam)
    {
        $this->nbreTeam = $nbreTeam;
    
        return $this;
    }

    /**
     * Get nbreTeam
     *
     * @return integer
     */
    public function getNbreTeam()
    {
        return $this->nbreTeam;
    }

    /**
     * Set descriptionProjet
     *
     * @param string $descriptionProjet
     *
     * @return Projet
     */
    public function setDescriptionProjet($descriptionProjet)
    {
        $this->descriptionProjet = $descriptionProjet;
    
        return $this;
    }

    /**
     * Get descriptionProjet
     *
     * @return string
     */
    public function getDescriptionProjet()
    {
        return $this->descriptionProjet;
    }

    /**
     * Set emailProjet
     *
     * @param string $emailProjet
     *
     * @return Projet
     */
    public function setEmailProjet($emailProjet)
    {
        $this->emailProjet = $emailProjet;
    
        return $this;
    }

    /**
     * Get emailProjet
     *
     * @return string
     */
    public function getEmailProjet()
    {
        return $this->emailProjet;
    }

    /**
     * Set idEnterprise
     *
     * @param integer $idEnterprise
     *
     * @return Projet
     */
    public function setIdEnterprise($idEnterprise)
    {
        $this->idEnterprise = $idEnterprise;
    
        return $this;
    }

    /**
     * Get idEnterprise
     *
     * @return integer
     */
    public function getIdEnterprise()
    {
        return $this->idEnterprise;
    }
}
