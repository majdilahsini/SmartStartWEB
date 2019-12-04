<?php

namespace Reclamation1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Investissement
 *
 * @ORM\Table(name="investissement", indexes={@ORM\Index(name="ck_investissement1", columns={"id_projet"}), @ORM\Index(name="ck_invesstissement2", columns={"id_invesstisseur"})})
 * @ORM\Entity
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
     * @var integer
     *
     * @ORM\Column(name="id_projet", type="integer", nullable=false)
     */
    private $idProjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_invesstisseur", type="integer", nullable=false)
     */
    private $idInvesstisseur;



    /**
     * Get idInvestissement
     *
     * @return integer
     */
    public function getIdInvestissement()
    {
        return $this->idInvestissement;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Investissement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set numcartebancaire
     *
     * @param integer $numcartebancaire
     *
     * @return Investissement
     */
    public function setNumcartebancaire($numcartebancaire)
    {
        $this->numcartebancaire = $numcartebancaire;
    
        return $this;
    }

    /**
     * Get numcartebancaire
     *
     * @return integer
     */
    public function getNumcartebancaire()
    {
        return $this->numcartebancaire;
    }

    /**
     * Set idProjet
     *
     * @param integer $idProjet
     *
     * @return Investissement
     */
    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;
    
        return $this;
    }

    /**
     * Get idProjet
     *
     * @return integer
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set idInvesstisseur
     *
     * @param integer $idInvesstisseur
     *
     * @return Investissement
     */
    public function setIdInvesstisseur($idInvesstisseur)
    {
        $this->idInvesstisseur = $idInvesstisseur;
    
        return $this;
    }

    /**
     * Get idInvesstisseur
     *
     * @return integer
     */
    public function getIdInvesstisseur()
    {
        return $this->idInvesstisseur;
    }
}
