<?php

namespace Reclamation1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprises
 *
 * @ORM\Table(name="entreprises", indexes={@ORM\Index(name="secteur_id", columns={"secteur_id"}), @ORM\Index(name="categorie_id", columns={"categorie_id"})})
 * @ORM\Entity
 */
class Entreprises
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="secteur_id", type="integer", nullable=false)
     */
    private $secteurId;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer", nullable=false)
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="categorie_id", type="integer", nullable=false)
     */
    private $categorieId;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse", type="string", length=100, nullable=false)
     */
    private $addresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Entreprises
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

    /**
     * Set secteurId
     *
     * @param integer $secteurId
     *
     * @return Entreprises
     */
    public function setSecteurId($secteurId)
    {
        $this->secteurId = $secteurId;
    
        return $this;
    }

    /**
     * Get secteurId
     *
     * @return integer
     */
    public function getSecteurId()
    {
        return $this->secteurId;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     *
     * @return Entreprises
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    
        return $this;
    }

    /**
     * Get taille
     *
     * @return integer
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set categorieId
     *
     * @param integer $categorieId
     *
     * @return Entreprises
     */
    public function setCategorieId($categorieId)
    {
        $this->categorieId = $categorieId;
    
        return $this;
    }

    /**
     * Get categorieId
     *
     * @return integer
     */
    public function getCategorieId()
    {
        return $this->categorieId;
    }

    /**
     * Set addresse
     *
     * @param string $addresse
     *
     * @return Entreprises
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;
    
        return $this;
    }

    /**
     * Get addresse
     *
     * @return string
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Entreprises
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
}
