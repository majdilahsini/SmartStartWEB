<?php

namespace OffreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSkills
 *
 * @ORM\Table(name="user_skills")})
 * @ORM\Entity
 */
class UserSkills
{
    /**
     * @var \UserBundle\Entity\Users
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

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

    /**
     * @return \UserBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \UserBundle\Entity\Users $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }






}

