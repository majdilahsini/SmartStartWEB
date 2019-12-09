<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSkills
 *
 * @ORM\Table(name="user_skills", indexes={@ORM\Index(name="fk_skills", columns={"skill_id"}), @ORM\Index(name="fk_skills_a", columns={"user_id"})})
 * @ORM\Entity
 */
class UserSkills
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
     * @ORM\Column(name="skill_id", type="integer", nullable=false)
     */
    private $skillId;


}

