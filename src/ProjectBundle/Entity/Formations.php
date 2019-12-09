<?php

namespace Project\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formations
 *
 * @ORM\Table(name="formations", indexes={@ORM\Index(name="fx_domaine", columns={"domaine_id"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\ProjetRepository")
 */
class Formations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ref", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="domaine_id", type="integer", nullable=false)
     */
    private $domaineId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree", type="integer", nullable=false)
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horraires", type="date", nullable=false)
     */
    private $horraires;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=50, nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=500, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;


}

