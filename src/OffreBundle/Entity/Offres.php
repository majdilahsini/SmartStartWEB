<?php

namespace OffreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offres
 *
 * @ORM\Table(name="offres", indexes={@ORM\Index(name="entreprise_id", columns={"entreprise_id"}), @ORM\Index(name="domaine_id", columns={"domaine_id"}), @ORM\Index(name="langue_ref", columns={"langue_ref"}), @ORM\Index(name="type_post_id", columns={"type_post_id"}), @ORM\Index(name="skill1_id", columns={"skill1_id"}), @ORM\Index(name="skill2_id", columns={"skill2_id"}), @ORM\Index(name="skill3_id", columns={"skill3_id"})})
 * @ORM\Entity(repositoryClass="OffreBundle\Repository\OffreRepository")
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
     * @var \UserBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entreprise_id", referencedColumnName="id")
     * })
     */
    private $entreprise;

    /**
     * @var \Domaines
     *
     * @ORM\ManyToOne(targetEntity="Domaines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="domaine_id", referencedColumnName="id")
     * })
     */
    private $domaine;

    /**
     * @var \Langues
     *
     * @ORM\ManyToOne(targetEntity="Langues")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="langue_ref", referencedColumnName="ref")
     * })
     */
    private $langueRef;

    /**
     * @var \TypePost
     *
     * @ORM\ManyToOne(targetEntity="TypePost")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_post_id", referencedColumnName="id")
     * })
     */
    private $typePost;

    /**
     * @var \Skills
     *
     * @ORM\ManyToOne(targetEntity="Skills")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skill1_id", referencedColumnName="id")
     * })
     */
    private $skill1;

    /**
     * @var \Skills
     *
     * @ORM\ManyToOne(targetEntity="Skills")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skill2_id", referencedColumnName="id")
     * })
     */
    private $skill2;

    /**
     * @var \Skills
     *
     * @ORM\ManyToOne(targetEntity="Skills")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skill3_id", referencedColumnName="id")
     * })
     */
    private $skill3;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return \DateTime
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * @param \DateTime $datePublication
     */
    public function setDatePublication($datePublication)
    {
        $this->datePublication = $datePublication;
    }

    /**
     * @return string
     */
    public function getNiveauEtude()
    {
        return $this->niveauEtude;
    }

    /**
     * @param string $niveauEtude
     */
    public function setNiveauEtude($niveauEtude)
    {
        $this->niveauEtude = $niveauEtude;
    }

    /**
     * @return int
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * @param int $salaire
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return \Users
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param \Users $entreprise
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
    }

    /**
     * @return \Domaines
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * @param \Domaines $domaine
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    }

    /**
     * @return \Langues
     */
    public function getLangueRef()
    {
        return $this->langueRef;
    }

    /**
     * @param \Langues $langueRef
     */
    public function setLangueRef($langueRef)
    {
        $this->langueRef = $langueRef;
    }

    /**
     * @return \TypePost
     */
    public function getTypePost()
    {
        return $this->typePost;
    }

    /**
     * @param \TypePost $typePost
     */
    public function setTypePost($typePost)
    {
        $this->typePost = $typePost;
    }

    /**
     * @return \Skills
     */
    public function getSkill1()
    {
        return $this->skill1;
    }

    /**
     * @param \Skills $skill1
     */
    public function setSkill1($skill1)
    {
        $this->skill1 = $skill1;
    }

    /**
     * @return \Skills
     */
    public function getSkill2()
    {
        return $this->skill2;
    }

    /**
     * @param \Skills $skill2
     */
    public function setSkill2($skill2)
    {
        $this->skill2 = $skill2;
    }

    /**
     * @return \Skills
     */
    public function getSkill3()
    {
        return $this->skill3;
    }

    /**
     * @param \Skills $skill3
     */
    public function setSkill3($skill3)
    {
        $this->skill3 = $skill3;
    }

    public function __toString()
    {
        return $this->getId();
    }


}

