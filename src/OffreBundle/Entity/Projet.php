<?php

namespace OffreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet", indexes={@ORM\Index(name="ck_projet1", columns={"id_enterprise"})})
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
     * @var string
     *
     * @ORM\Column(name="paye", type="string", length=20, nullable=false)
     */
    private $paye;

    /**
     * @var float
     *
     * @ORM\Column(name="votre_finance", type="float", precision=10, scale=0, nullable=false)
     */
    private $votreFinance;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_contributeur", type="integer", nullable=false)
     */
    private $nbreContributeur;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="compte_bancaire", type="integer", nullable=false)
     */
    private $compteBancaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin-projet", type="date", nullable=false)
     */
    private $dateFinProjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_projet", type="date", nullable=false)
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
     * @ORM\Column(name="tel_projet", type="integer", nullable=false)
     */
    private $telProjet;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_team", type="integer", nullable=false)
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
     * @ORM\Column(name="id_enterprise", type="integer", nullable=false)
     */
    private $idEnterprise;


}

