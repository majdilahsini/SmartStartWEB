<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * showInvesstir
 *
 * @ORM\Table(name="show_invesstir")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\showInvesstirRepository")
 */
class showInvesstir
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
     * @ORM\Column(name="nom_projet", type="string", length=255)
     */
    private $nomProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=255)
     */
    private $fullname;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;


    /**
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var int
     *
     * @ORM\Column(name="numcarteBancaire", type="integer")
     */
    private $numcarteBancaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_invesstissement", type="date")
     */
    private $dateInvesstissement;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomProjet
     *
     * @param string $nomProjet
     *
     * @return showInvesstir
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
     * Set fullname
     *
     * @param string $fullname
     *
     * @return showInvesstir
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    
        return $this;
    }

    /**
     * Get fullname
     *
     * @return string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return showInvesstir
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return integer
     */
    public function getTel()
    {
        return $this->tel;
    }




    /**
     * Set montant
     *
     * @param integer $montants
     *
     * @return showInvesstir
     */
    public function setMontants($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set numcarteBancaire
     *
     * @param integer $numcarteBancaire
     *
     * @return showInvesstir
     */
    public function setNumcarteBancaire($numcarteBancaire)
    {
        $this->numcarteBancaire = $numcarteBancaire;
    
        return $this;
    }

    /**
     * Get numcarteBancaire
     *
     * @return integer
     */
    public function getNumcarteBancaire()
    {
        return $this->numcarteBancaire;
    }

    /**
     * Set dateInvesstissement
     *
     * @param \DateTime $dateInvesstissement
     *
     * @return showInvesstir
     */
    public function setDateInvesstissement($dateInvesstissement)
    {
        $this->dateInvesstissement = $dateInvesstissement;
    
        return $this;
    }

    /**
     * Get dateInvesstissement
     *
     * @return \DateTime
     */
    public function getDateInvesstissement()
    {
        return $this->dateInvesstissement;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return showInvesstir
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}

