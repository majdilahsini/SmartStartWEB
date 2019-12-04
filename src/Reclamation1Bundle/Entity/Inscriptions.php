<?php

namespace Reclamation1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscriptions
 *
 * @ORM\Table(name="inscriptions", indexes={@ORM\Index(name="fx_user", columns={"user_id"}), @ORM\Index(name="fx_formation", columns={"formation_ref"})})
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
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="formation_ref", type="integer", nullable=false)
     */
    private $formationRef;

    /**
     * @var string
     *
     * @ORM\Column(name="lettre_motivation", type="string", length=1000, nullable=false)
     */
    private $lettreMotivation;



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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Inscriptions
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set formationRef
     *
     * @param integer $formationRef
     *
     * @return Inscriptions
     */
    public function setFormationRef($formationRef)
    {
        $this->formationRef = $formationRef;
    
        return $this;
    }

    /**
     * Get formationRef
     *
     * @return integer
     */
    public function getFormationRef()
    {
        return $this->formationRef;
    }

    /**
     * Set lettreMotivation
     *
     * @param string $lettreMotivation
     *
     * @return Inscriptions
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
}
