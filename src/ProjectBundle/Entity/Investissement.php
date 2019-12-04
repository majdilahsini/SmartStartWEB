<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Investissement
 *
 * @ORM\Table(name="investissement", indexes={@ORM\Index(name="id_invesstisseur", columns={"id_invesstisseur"}), @ORM\Index(name="id_projet", columns={"id_projet"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\InvestissementRepository")
 */
class Investissement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_investissement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInvestissement;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="integer", nullable=false)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="numcarteBancaire", type="integer", nullable=false)
     */
    private $numcartebancaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_invesstissement", type="date", nullable=false)
     */
    private $dateInvesstissement;

    /**
     * @var \UserBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_invesstisseur", referencedColumnName="id")
     * })
     */
    private $idInvesstisseur;

    /**
     * @var \ProjectBundle\Entity\Projet
     *
     * @ORM\ManyToOne(targetEntity="\ProjectBundle\Entity\Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_projet", referencedColumnName="id_projet")
     * })
     */
    private $idProjet;

    /**
     * @return int
     */
    public function getIdInvestissement()
    {
        return $this->idInvestissement;
    }

    /**
     * @param int $idInvestissement
     */
    public function setIdInvestissement($idInvestissement)
    {
        $this->idInvestissement = $idInvestissement;
    }

    /**
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param int $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    /**
     * @return int
     */
    public function getNumcartebancaire()
    {
        return $this->numcartebancaire;
    }

    /**
     * @param int $numcartebancaire
     */
    public function setNumcartebancaire($numcartebancaire)
    {
        $this->numcartebancaire = $numcartebancaire;
    }

    /**
     * @return \DateTime
     */
    public function getDateInvesstissement()
    {
        return $this->dateInvesstissement;
    }

    /**
     * @param \DateTime $dateInvesstissement
     */
    public function setDateInvesstissement($dateInvesstissement)
    {
        $this->dateInvesstissement = $dateInvesstissement;
    }

    /**
     * @return \Users
     */
    public function getIdInvesstisseur()
    {
        return $this->idInvesstisseur;
    }

    /**
     * @param \Users $idInvesstisseur
     */
    public function setIdInvesstisseur($idInvesstisseur)
    {
        $this->idInvesstisseur = $idInvesstisseur;
    }

    /**
     * @return \Projet
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * @param \Projet $idProjet
     */
    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;
    }


}

