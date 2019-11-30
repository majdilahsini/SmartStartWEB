<?php

namespace Formation\Entity;

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


}

