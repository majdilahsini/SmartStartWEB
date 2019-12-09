<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\Users;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Projet
 *
 * @ORM\Table(name="projet", indexes={@ORM\Index(name="id_entreprise", columns={"id_entreprise"}), @ORM\Index(name="id_categorie", columns={"id_categorie"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\ProjetRepository")
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
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Your first name must be at least  characters long",
     *      maxMessage = "Your first name cannot be longer than  characters"
     * )
     *
     * @ORM\Column(name="nom_projet", type="string", length=20, nullable=false)
     */
    private $nomProjet;

    /**
     * @var float
     *
     * @ORM\Column(name="votre_finance", type="float", precision=10, scale=0, nullable=true)
     */
    private $votreFinance;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="bigint", nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="compte_bancaire", type="bigint", nullable=true)
     */
    private $compteBancaire;



    /**
     * @Assert\DateTime()
     *
     * @ORM\Column(name="date_debut_projet", type="date", nullable=true)
     */
    private $dateDebutProjet;

    /**
     * @Assert\DateTime
     * @Assert\GreaterThan(propertyPath="dateDebutProjet")
     * @ORM\Column(name="date_fin_projet", type="date", nullable=true)
     */
    private $dateFinProjet;

    /**
     * @return \DateTime
     */
    public function getDateFinProjet()
    {
        return $this->dateFinProjet;
    }

    /**
     * @param \DateTime $dateFinProjet
     */
    public function setDateFinProjet($dateFinProjet)
    {
        $this->dateFinProjet = $dateFinProjet;
    }

    /**
     * @var string
     * @Assert\Length(
     *      min = 10,
     *      max = 255,
     *      minMessage = "adresse doit etre plus long sup {{ limit }} characters ",
     *      maxMessage = "adresse doit etre plus long inf  {{ limit }} characters"
     * )
     *
     * @ORM\Column(name="adresse_projet", type="string", length=250, nullable=false)
     */
    private $adresseProjet;

    /**
     * @var integer
     *
     * @Assert\LessThan(
     *     value = 99999999
     * )
     * @Assert\GreaterThanOrEqual(
     *     value = 10000000
     * )
     * @ORM\Column(name="tel_projet", type="integer", nullable=true)
     */
    private $telProjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_team", type="integer", nullable=true)
     */
    private $nbreTeam;

    /**
     * @var string
     * @Assert\Length(
     *      min = 2,
     *      minMessage = "adresse doit etre plus long sup {{ limit }} characters long",
     * )
     *
     * @ORM\Column(name="description_projet", type="string", length=200, nullable=false)
     */
    private $descriptionProjet;

    /**
     * @var string
     * @Assert\Email(
     *     message = "le email n' est pas valider '{{ value }}' ."
     * )
     *
     * @ORM\Column(name="email_projet", type="string", length=50, nullable=false)
     */
    private $emailProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="string", length=100, nullable=true)
     */
    private $image;

    /**
     * @var \ProjectBundle\Entity\Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie", referencedColumnName="id")
     * })
     */
    private $idCategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_etat", type="integer", nullable=true)
     *
     */
    private $idEtat;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entreprise", referencedColumnName="id")
     * })
     */
    private $idEntreprise;
    /**
     * @var string
     *
     *@Assert\File(maxSize="500k")
     */
    public  $file;

    public function getWebPath(){
        return null===$this->image ? null: $this->getUploadDir().'/'.$this->image;
    }

    protected function getUploadRootDir(){
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir(){
        return 'imgs';
    }

    public function uploadProfilePicture(){
        $this->file->move($this->getUploadRootDir(),$this->file->getClientOriginalName());
        $this->image=$this->file->getClientOriginalName();
        $this->file=null;

    }

    /**
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }



    /**
     * @return int
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * @param int $idProjet
     */
    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;
    }

    /**
     * @return string
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * @param string $nomProjet
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;
    }

    /**
     * @return float
     */
    public function getVotreFinance()
    {
        return $this->votreFinance;
    }

    /**
     * @param float $votreFinance
     */
    public function setVotreFinance($votreFinance)
    {
        $this->votreFinance = $votreFinance;
    }

    /**
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param int $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return int
     */
    public function getCompteBancaire()
    {
        return $this->compteBancaire;
    }

    /**
     * @param int $compteBancaire
     */
    public function setCompteBancaire($compteBancaire)
    {
        $this->compteBancaire = $compteBancaire;
    }





    /**
     * @return \DateTime
     */
    public function getDateDebutProjet()
    {
        return $this->dateDebutProjet;
    }

    /**
     * @param \DateTime $dateDebutProjet
     */
    public function setDateDebutProjet($dateDebutProjet)
    {
        $this->dateDebutProjet = $dateDebutProjet;
    }

    /**
     * @return string
     */
    public function getAdresseProjet()
    {
        return $this->adresseProjet;
    }

    /**
     * @param string $adresseProjet
     */
    public function setAdresseProjet($adresseProjet)
    {
        $this->adresseProjet = $adresseProjet;
    }

    /**
     * @return int
     */
    public function getTelProjet()
    {
        return $this->telProjet;
    }

    /**
     * @param int $telProjet
     */
    public function setTelProjet($telProjet)
    {
        $this->telProjet = $telProjet;
    }

    /**
     * @return int
     */
    public function getNbreTeam()
    {
        return $this->nbreTeam;
    }

    /**
     * @param int $nbreTeam
     */
    public function setNbreTeam($nbreTeam)
    {
        $this->nbreTeam = $nbreTeam;
    }

    /**
     * @return string
     */
    public function getDescriptionProjet()
    {
        return $this->descriptionProjet;
    }

    /**
     * @param string $descriptionProjet
     */
    public function setDescriptionProjet($descriptionProjet)
    {
        $this->descriptionProjet = $descriptionProjet;
    }

    /**
     * @return string
     */
    public function getEmailProjet()
    {
        return $this->emailProjet;
    }

    /**
     * @param string $emailProjet
     */
    public function setEmailProjet($emailProjet)
    {
        $this->emailProjet = $emailProjet;
    }

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
     * @return Categories
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * @param Categories $idCategorie
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;
    }

    /**
     * @return int
     */
    public function getIdEtat()
    {
        return $this->idEtat;
    }

    /**
     * @param int $idEtat
     */
    public function setIdEtat($idEtat)
    {
        $this->idEtat = $idEtat;
    }



    /**
     * @return Users
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * @param Users $idEntreprise
     */
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;
    }


}

