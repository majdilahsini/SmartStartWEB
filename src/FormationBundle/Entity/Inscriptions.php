<?php

namespace FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\Users;

/**
 * Inscriptions
 * @ORM\Entity(repositoryClass="FormationBundle\Repository\temporaireRepository")
 * @ORM\Table(name="inscriptions", indexes={@ORM\Index(name="formation_ref", columns={"formation_ref"}),@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Inscriptions
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
     * @ORM\Column(name="lettre_motivation", type="string", length=1000, nullable=false)
     */
    private $lettreMotivation;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_id", type="integer", nullable=true)
     */
    private $etat;



    /**
     * @var \FormationBundle\Entity\Formations
     *
     * @ORM\ManyToOne(targetEntity="Formations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formation_ref", referencedColumnName="ref")
     * })
     */
    private $formationRef;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;
    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255)
     */
    private $specialite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Datecreation", type="date")
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="ecole", type="string", length=255)
     */
    private $ecole;

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
    public function getLettreMotivation()
    {
        return $this->lettreMotivation;
    }

    /**
     * @param string $lettreMotivation
     */
    public function setLettreMotivation($lettreMotivation)
    {
        $this->lettreMotivation = $lettreMotivation;
    }

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

    /**
     * @return Formations
     */
    public function getFormationRef()
    {
        return $this->formationRef;
    }

    /**
     * @param Formations $formationRef
     */
    public function setFormationRef($formationRef)
    {
        $this->formationRef = $formationRef;
    }

    /**
     * @return Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param Users $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * @param string $specialite
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    }

    /**
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * @param \DateTime $datecreation
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;
    }

    /**
     * @return string
     */
    public function getEcole()
    {
        return $this->ecole;
    }

    /**
     * @param string $ecole
     */
    public function setEcole($ecole)
    {
        $this->ecole = $ecole;
    }




}

