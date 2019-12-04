<?php

namespace Reclamation1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offres
 *
 * @ORM\Table(name="offres", indexes={@ORM\Index(name="domaine_id", columns={"domaine_id"}), @ORM\Index(name="entreprise_id", columns={"entreprise_id"}), @ORM\Index(name="langue_ref", columns={"langue_ref"}), @ORM\Index(name="type_post_id", columns={"type_post_id"})})
 * @ORM\Entity
 */
class Offres
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
     * @ORM\Column(name="titre", type="string", length=100, nullable=false)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="domaine_id", type="integer", nullable=false)
     */
    private $domaineId;

    /**
     * @var integer
     *
     * @ORM\Column(name="entreprise_id", type="integer", nullable=false)
     */
    private $entrepriseId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="date", nullable=false)
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_etude", type="string", length=20, nullable=false)
     */
    private $niveauEtude;

    /**
     * @var integer
     *
     * @ORM\Column(name="langue_ref", type="integer", nullable=false)
     */
    private $langueRef;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_post_id", type="integer", nullable=false)
     */
    private $typePostId;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill1_id", type="integer", nullable=true)
     */
    private $skill1Id;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill2_id", type="integer", nullable=true)
     */
    private $skill2Id;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill3_id", type="integer", nullable=true)
     */
    private $skill3Id;

    /**
     * @var integer
     *
     * @ORM\Column(name="salaire", type="integer", nullable=false)
     */
    private $salaire;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=1000, nullable=false)
     */
    private $photo;



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
     * Set titre
     *
     * @param string $titre
     *
     * @return Offres
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set domaineId
     *
     * @param integer $domaineId
     *
     * @return Offres
     */
    public function setDomaineId($domaineId)
    {
        $this->domaineId = $domaineId;
    
        return $this;
    }

    /**
     * Get domaineId
     *
     * @return integer
     */
    public function getDomaineId()
    {
        return $this->domaineId;
    }

    /**
     * Set entrepriseId
     *
     * @param integer $entrepriseId
     *
     * @return Offres
     */
    public function setEntrepriseId($entrepriseId)
    {
        $this->entrepriseId = $entrepriseId;
    
        return $this;
    }

    /**
     * Get entrepriseId
     *
     * @return integer
     */
    public function getEntrepriseId()
    {
        return $this->entrepriseId;
    }

    /**
     * Set datePublication
     *
     * @param \DateTime $datePublication
     *
     * @return Offres
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;
    
        return $this;
    }

    /**
     * Get datePublication
     *
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Set niveauEtude
     *
     * @param string $niveauEtude
     *
     * @return Offres
     */
    public function setNiveauEtude($niveauEtude)
    {
        $this->niveauEtude = $niveauEtude;
    
        return $this;
    }

    /**
     * Get niveauEtude
     *
     * @return string
     */
    public function getNiveauEtude()
    {
        return $this->niveauEtude;
    }

    /**
     * Set langueRef
     *
     * @param integer $langueRef
     *
     * @return Offres
     */
    public function setLangueRef($langueRef)
    {
        $this->langueRef = $langueRef;
    
        return $this;
    }

    /**
     * Get langueRef
     *
     * @return integer
     */
    public function getLangueRef()
    {
        return $this->langueRef;
    }

    /**
     * Set typePostId
     *
     * @param integer $typePostId
     *
     * @return Offres
     */
    public function setTypePostId($typePostId)
    {
        $this->typePostId = $typePostId;
    
        return $this;
    }

    /**
     * Get typePostId
     *
     * @return integer
     */
    public function getTypePostId()
    {
        return $this->typePostId;
    }

    /**
     * Set skill1Id
     *
     * @param integer $skill1Id
     *
     * @return Offres
     */
    public function setSkill1Id($skill1Id)
    {
        $this->skill1Id = $skill1Id;
    
        return $this;
    }

    /**
     * Get skill1Id
     *
     * @return integer
     */
    public function getSkill1Id()
    {
        return $this->skill1Id;
    }

    /**
     * Set skill2Id
     *
     * @param integer $skill2Id
     *
     * @return Offres
     */
    public function setSkill2Id($skill2Id)
    {
        $this->skill2Id = $skill2Id;
    
        return $this;
    }

    /**
     * Get skill2Id
     *
     * @return integer
     */
    public function getSkill2Id()
    {
        return $this->skill2Id;
    }

    /**
     * Set skill3Id
     *
     * @param integer $skill3Id
     *
     * @return Offres
     */
    public function setSkill3Id($skill3Id)
    {
        $this->skill3Id = $skill3Id;
    
        return $this;
    }

    /**
     * Get skill3Id
     *
     * @return integer
     */
    public function getSkill3Id()
    {
        return $this->skill3Id;
    }

    /**
     * Set salaire
     *
     * @param integer $salaire
     *
     * @return Offres
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    
        return $this;
    }

    /**
     * Get salaire
     *
     * @return integer
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Offres
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
