<?php

namespace Formation\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet", indexes={@ORM\Index(name="fk_id_entreprise", columns={"id_entreprise"})})
 * @ORM\Entity
 */
class Projet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_projet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_projet", type="string", length=20, nullable=false)
     */
    private $nomProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=20, nullable=false)
     */
    private $categorie;

    /**
     * @var float
     *
     * @ORM\Column(name="votre_finance", type="float", precision=10, scale=0, nullable=true)
     */
    private $votreFinance;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant", type="bigint", nullable=true)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="compte_bancaire", type="bigint", nullable=true)
     */
    private $compteBancaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_projet", type="date", nullable=true)
     */
    private $dateDebutProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_projet", type="string", length=250, nullable=false)
     */
    private $adresseProjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel_projet", type="integer", nullable=true)
     */
    private $telProjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_team", type="integer", nullable=true)
     */
    private $nbreTeam;

    /**
     * @var string
     *
     * @ORM\Column(name="description_projet", type="string", length=200, nullable=false)
     */
    private $descriptionProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="email_projet", type="string", length=50, nullable=false)
     */
    private $emailProjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_entreprise", type="integer", nullable=false)
     */
    private $idEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="Image", type="string", length=100, nullable=true)
     */
    private $image;


}

