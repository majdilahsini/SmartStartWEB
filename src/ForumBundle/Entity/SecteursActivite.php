<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SecteursActivite
 *
 * @ORM\Table(name="secteurs_activite")
 * @ORM\Entity
 */
class SecteursActivite
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
     * @ORM\Column(name="nom", type="integer", nullable=false)
     */
    private $nom;


}

