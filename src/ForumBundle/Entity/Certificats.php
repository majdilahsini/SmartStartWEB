<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificats
 *
 * @ORM\Table(name="certificats")
 * @ORM\Entity
 */
class Certificats
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
     * @ORM\Column(name="nom_certif", type="string", length=1000, nullable=false)
     */
    private $nomCertif;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_formateur", type="string", length=1000, nullable=false)
     */
    private $nomFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_entreprise", type="string", length=1000, nullable=false)
     */
    private $nomEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=1000, nullable=false)
     */
    private $domaine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_obtention", type="date", nullable=false)
     */
    private $dateObtention;


}

