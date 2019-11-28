<?php

namespace OffreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Applications
 *
 * @ORM\Table(name="applications", indexes={@ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="offre_id", columns={"offre_id"})})
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
     * @var float
     *
     * @ORM\Column(name="matchs", type="float", precision=10, scale=0, nullable=false)
     */
    private $matchs;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Offres
     *
     * @ORM\ManyToOne(targetEntity="Offres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offre_id", referencedColumnName="id")
     * })
     */
    private $offre;


}

