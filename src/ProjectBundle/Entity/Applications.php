<?php

namespace Project\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Applications
 *
 * @ORM\Table(name="applications", indexes={@ORM\Index(name="offre_id", columns={"offre_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Applications
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
     * @ORM\Column(name="offre_id", type="integer", nullable=false)
     */
    private $offreId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;


}

