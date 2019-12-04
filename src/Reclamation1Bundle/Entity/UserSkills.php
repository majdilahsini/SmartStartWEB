<?php

namespace Reclamation1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSkills
 *
 * @ORM\Table(name="user_skills", indexes={@ORM\Index(name="fk_skills", columns={"skill1_id"})})
 * @ORM\Entity
 */
class UserSkills
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
     * @ORM\Column(name="skill1_id", type="integer", nullable=false)
     */
    private $skill1Id;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill2_id", type="integer", nullable=false)
     */
    private $skill2Id;

    /**
     * @var integer
     *
     * @ORM\Column(name="skill3_id", type="integer", nullable=false)
     */
    private $skill3Id;



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
     * Set skill1Id
     *
     * @param integer $skill1Id
     *
     * @return UserSkills
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
     * @return UserSkills
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
     * @return UserSkills
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
}
