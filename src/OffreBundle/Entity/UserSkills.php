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


}

