<?php

namespace Formation\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaines1
 *
 * @ORM\Table(name="domaines1")
 * @ORM\Entity
 */
class Domaines1
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;


}

