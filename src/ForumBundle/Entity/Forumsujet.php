<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forumsujet
 *
 * @ORM\Table(name="forumsujet", indexes={@ORM\Index(name="forum_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Forumsujet
{
    /**
     * @return int
     */
    public function getIdSujet()
    {
        return $this->idSujet;
    }

    /**
     * @param int $idSujet
     */
    public function setIdSujet($idSujet)
    {
        $this->idSujet = $idSujet;
    }

    /**
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param string $sujet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    /**
     * @return \Users
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param \Users $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Sujet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSujet;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=500, nullable=false)
     */
    private $sujet;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;

    public function __toString() {
        return $this->sujet;
    }

}

