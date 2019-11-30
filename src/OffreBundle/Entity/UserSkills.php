<?php

namespace OffreBundle\Entity;

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




}

