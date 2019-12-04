<?php

namespace Reclamation1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLangues
 *
 * @ORM\Table(name="user_langues", indexes={@ORM\Index(name="fk_user_id", columns={"langue1_ref"}), @ORM\Index(name="fk_langue_id", columns={"langue2_ref"})})
 * @ORM\Entity
 */
class UserLangues
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="langue1_ref", type="integer", nullable=false)
     */
    private $langue1Ref;

    /**
     * @var integer
     *
     * @ORM\Column(name="langue2_ref", type="integer", nullable=false)
     */
    private $langue2Ref;



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
     * Set langue1Ref
     *
     * @param integer $langue1Ref
     *
     * @return UserLangues
     */
    public function setLangue1Ref($langue1Ref)
    {
        $this->langue1Ref = $langue1Ref;
    
        return $this;
    }

    /**
     * Get langue1Ref
     *
     * @return integer
     */
    public function getLangue1Ref()
    {
        return $this->langue1Ref;
    }

    /**
     * Set langue2Ref
     *
     * @param integer $langue2Ref
     *
     * @return UserLangues
     */
    public function setLangue2Ref($langue2Ref)
    {
        $this->langue2Ref = $langue2Ref;
    
        return $this;
    }

    /**
     * Get langue2Ref
     *
     * @return integer
     */
    public function getLangue2Ref()
    {
        return $this->langue2Ref;
    }
}
