<?php

namespace Reclamation1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entretienss
 *
 * @ORM\Table(name="entretienss", indexes={@ORM\Index(name="fk_id_condidat", columns={"id_condidat"}), @ORM\Index(name="fk_id_ent", columns={"id_entreprise"})})
 * @ORM\Entity
 */
class Entretienss
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ref_ent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refEnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_entreprise", type="integer", nullable=false)
     */
    private $idEntreprise;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_condidat", type="integer", nullable=false)
     */
    private $idCondidat;

    /**
     * @var string
     *
     * @ORM\Column(name="poste_ent", type="string", length=50, nullable=false)
     */
    private $posteEnt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ent", type="date", nullable=false)
     */
    private $dateEnt;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_ent", type="string", length=50, nullable=false)
     */
    private $heureEnt;

    /**
     * @var string
     *
     * @ORM\Column(name="description_ent", type="string", length=500, nullable=false)
     */
    private $descriptionEnt;


}

