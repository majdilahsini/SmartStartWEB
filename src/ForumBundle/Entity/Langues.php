<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langues
 *
 * @ORM\Table(name="langues")
 * @ORM\Entity
 */
class Langues
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ref", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ref;

    /**
     * @var integer
     *
     * @ORM\Column(name="nom", type="integer", nullable=false)
     */
    private $nom;


}

