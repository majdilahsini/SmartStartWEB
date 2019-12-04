<?php

namespace FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use UserBundle\Entity\Users;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Formations
 *
 * @ORM\Table(name="formations", indexes={@ORM\Index(name="domaine_id", columns={"domaine_id"}), @ORM\Index(name="entreprise_id", columns={"entreprise_id"})})
 * @ORM\Entity(repositoryClass="FormationBundle\Repository\FormationsRepository")
 */
class Formations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ref", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=false)
     *
     * @Assert\NotBlank(message="champ obligatoire")
     * @Assert\Length(min=5,minMessage = "'{{ value }}' est trop courte" )
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotBlank(message="champ obligatoire")
     * @Assert\Length(min=20)
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var integer
     * @Assert\NotNull(message="champ obligatoire")
     * @Assert\Length(min=2,minMessage="'{{ value }}'est trop courte. Il devrait avoir 2 chiffres")
     * @Assert\Length(max=2,maxMessage="'{{ value }}'est trop longue. Il devrait avoir 2 chiffres ou moins.")
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree;

    /** @Assert\DateTime()
     * @Assert\NotBlank(message="champ obligatoire")
     * @Assert\LessThanOrEqual(propertyPath="dateFin",
     *     message = "la date de debut doit étre infenuire a la date fin "
     * )
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @Assert\DateTime()
     * @Assert\NotBlank(message="champ obligatoire")
     * @Assert\GreaterThan(propertyPath="dateDebut",
     *   message = "la date finale doit étre grande que la date de debut"
     * )
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var float
     * @Assert\NotNull(message="champ obligatoire")
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     * @Assert\NotBlank(message="champ obligatoire")
     * @ORM\Column(name="adresse", type="string", length=500, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     * @Assert\NotBlank(message="champ obligatoire")
     * @Assert\Email(
     *     message = "email '{{ value }}' est invalide",
     *  )
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var integer
     * @Assert\NotNull(message="champ obligatoire")
     * @ORM\Column(name="contact", type="integer", nullable=false)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;

    /**
     * @var integer
     * @Assert\NotNull(message="champ obligatoire")
     * @ORM\Column(name="Nombres", type="integer", nullable=true)
     */
    private $nombres;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_formation", type="integer", nullable=true)
     */
    private $etatFormation;

    /**
     * @var \FormationBundle\Entity\DomainesFormation
     *
     * @ORM\ManyToOne(targetEntity="DomainesFormation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="domaine_id", referencedColumnName="id")
     * })
     */
    private $domaine;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_nombres", type="integer", nullable=true)
     */
    private $etatNombres;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entreprise_id", referencedColumnName="id")
     * })
     */
    private $entreprise;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreationformation", type="date")
     */
    private $datecreationformation;

    /**
     * @var string
     * @Assert\NotBlank(message="champ obligatoire")
     * @Assert\File(maxSize="500K")
     */
    public  $file;

    public function getWebPath(){
        return null===$this->image ? null: $this->getUploadDir().'/'.$this->image;
    }
    protected function getUploadRootDir(){
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }
    protected function getUploadDir(){
        return 'images';
    }
    public function uploadProfilePicture(){
        $this->file->move($this->getUploadRootDir(),$this->file->getClientOriginalName());
        $this->image=$this->file->getClientOriginalName();
        $this->file=null;

    }

    /**
     * @return int
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param int $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return \DateTime
     */
    public function getDatecreationformation()
    {
        return $this->datecreationformation;
    }

    /**
     * @param \DateTime $datecreationformation
     */
    public function setDatecreationformation($datecreationformation)
    {
        $this->datecreationformation = $datecreationformation;
    }


    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param int $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param int $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
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
     * @return int
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * @param int $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * @return int
     */
    public function getEtatFormation()
    {
        return $this->etatFormation;
    }

    /**
     * @param int $etatFormation
     */
    public function setEtatFormation($etatFormation)
    {
        $this->etatFormation = $etatFormation;
    }

    /**
     * @return DomainesFormation
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * @param DomainesFormation $domaine
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    }

    /**
     * @return int
     */
    public function getEtatNombres()
    {
        return $this->etatNombres;
    }

    /**
     * @param int $etatNombres
     */
    public function setEtatNombres($etatNombres)
    {
        $this->etatNombres = $etatNombres;
    }

    /**
     * @return Users
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param Users $entreprise
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
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



}

