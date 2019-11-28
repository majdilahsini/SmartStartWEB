<?php

namespace OffreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprises
 *
 * @ORM\Table(name="entreprises", indexes={@ORM\Index(name="secteur_id", columns={"secteur_id"}), @ORM\Index(name="categorie_id", columns={"categorie_id"})})
 * @ORM\Entity
 */
class Entreprises
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="secteur_id", type="integer", nullable=false)
     */
    private $secteurId;

    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer", nullable=false)
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="categorie_id", type="integer", nullable=false)
     */
    private $categorieId;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse", type="string", length=100, nullable=false)
     */
    private $addresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer", nullable=false)
     */
    private $tel;


}

