<?php

namespace OffreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscriptions
 *
 * @ORM\Table(name="inscriptions", indexes={@ORM\Index(name="fx_user", columns={"user_id"}), @ORM\Index(name="fx_formation", columns={"formation_ref"})})
 * @ORM\Entity
 */
class Inscriptions
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
     * @ORM\Column(name="formation_ref", type="integer", nullable=false)
     */
    private $formationRef;

    /**
     * @var string
     *
     * @ORM\Column(name="lettre_motivation", type="string", length=1000, nullable=false)
     */
    private $lettreMotivation;


}

