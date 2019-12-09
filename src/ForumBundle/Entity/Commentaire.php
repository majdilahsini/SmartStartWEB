<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="id_sujet", columns={"id_sujet"}), @ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @return int
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * @param int $idCommentaire
     */
    public function setIdCommentaire($idCommentaire)
    {
        $this->idCommentaire = $idCommentaire;
    }

    /**
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param string $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return \Forumsujet
     */
    public function getIdSujet()
    {
        return $this->idSujet;
    }

    /**
     * @param \Forumsujet $idSujet
     */
    public function setIdSujet($idSujet)
    {
        $this->idSujet = $idSujet;
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
     * @ORM\Column(name="id_commentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=20000, nullable=false)
     */
    private $commentaire;

    /**
     * @var \Forumsujet
     *
     * @ORM\ManyToOne(targetEntity="Forumsujet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sujet", referencedColumnName="id_Sujet")
     * })
     */
    private $idSujet;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;


}

