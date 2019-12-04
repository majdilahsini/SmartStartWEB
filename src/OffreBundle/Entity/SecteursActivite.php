<?php

namespace OffreBundle\Entity;

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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=false)
     */
    private $nom;


}

