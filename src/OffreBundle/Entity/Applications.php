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
     * @var \UserBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Users")
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

    /**
     * @return float
     */
    public function getMatchs()
    {
        return $this->matchs;
    }

    /**
     * @param float $matchs
     */
    public function setMatchs($matchs)
    {
        $this->matchs = $matchs;
    }

    /**
     * @return \Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Users $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return \Offres
     */
    public function getOffre()
    {
        return $this->offre;
    }

    /**
     * @param \Offres $offre
     */
    public function setOffre($offre)
    {
        $this->offre = $offre;
    }



}

