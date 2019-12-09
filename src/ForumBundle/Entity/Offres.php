<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offres
 *
 * @ORM\Table(name="offres", indexes={@ORM\Index(name="domaine_id", columns={"domaine_id"}), @ORM\Index(name="entreprise_id", columns={"entreprise_id"}), @ORM\Index(name="langue_ref", columns={"langue_ref"}), @ORM\Index(name="type_post_id", columns={"type_post_id"})})
 * @ORM\Entity
 */
class Offres
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
     * @var integer
     *
     * @ORM\Column(name="domaine_id", type="integer", nullable=false)
     */
    private $domaineId;

    /**
     * @var integer
     *
     * @ORM\Column(name="entreprise_id", type="integer", nullable=false)
     */
    private $entrepriseId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="date", nullable=false)
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_etude", type="string", length=20, nullable=false)
     */
    private $niveauEtude;

    /**
     * @var integer
     *
     * @ORM\Column(name="langue_ref", type="integer", nullable=false)
     */
    private $langueRef;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_post_id", type="integer", nullable=false)
     */
    private $typePostId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     */
    private $description;


}

