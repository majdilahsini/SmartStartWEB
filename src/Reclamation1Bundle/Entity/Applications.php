<?php

namespace Reclamation1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Applications
 *
 * @ORM\Table(name="applications", indexes={@ORM\Index(name="fk_offre_id", columns={"offre_id"}), @ORM\Index(name="fk_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Applications
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
     * @ORM\Column(name="offre_id", type="integer", nullable=false)
     */
    private $offreId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var float
     *
     * @ORM\Column(name="matchs", type="float", precision=10, scale=0, nullable=false)
     */
    private $matchs;



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
     * Set offreId
     *
     * @param integer $offreId
     *
     * @return Applications
     */
    public function setOffreId($offreId)
    {
        $this->offreId = $offreId;
    
        return $this;
    }

    /**
     * Get offreId
     *
     * @return integer
     */
    public function getOffreId()
    {
        return $this->offreId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Applications
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
     * Set matchs
     *
     * @param float $matchs
     *
     * @return Applications
     */
    public function setMatchs($matchs)
    {
        $this->matchs = $matchs;
    
        return $this;
    }

    /**
     * Get matchs
     *
     * @return float
     */
    public function getMatchs()
    {
        return $this->matchs;
    }
}
