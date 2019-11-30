<?php

namespace FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\Users;

/**
 * Inscriptions
 *
 * @ORM\Table(name="inscriptions", indexes={@ORM\Index(name="formation_ref", columns={"formation_ref"}), @ORM\Index(name="entreprise_id", columns={"entreprise_id"}), @ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="domaine_Ibfk_4", columns={"domaine_ref"}), @ORM\Index(name="Inscriptions_Idfk_4", columns={"etat_id"})})
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
     * @var \FormationBundle\Entity\EtatInscription
     *
     * @ORM\ManyToOne(targetEntity="EtatInscription")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="etat_id", referencedColumnName="id")
     * })
     */
    private $etat;

    /**
     * @var \FormationBundle\Entity\Formations
     *
     * @ORM\ManyToOne(targetEntity="Formations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="domaine_ref", referencedColumnName="domaine_id")
     * })
     */
    private $domaineRef;

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
     * @var \FormationBundle\Entity\Formations
     *
     * @ORM\ManyToOne(targetEntity="Formations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entreprise_id", referencedColumnName="entreprise_id")
     * })
     */
    private $entreprise;

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
     * @return EtatInscription
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param EtatInscription $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return Formations
     */
    public function getDomaineRef()
    {
        return $this->domaineRef;
    }

    /**
     * @param Formations $domaineRef
     */
    public function setDomaineRef($domaineRef)
    {
        $this->domaineRef = $domaineRef;
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
     * @return Formations
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param Formations $entreprise
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
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


}

