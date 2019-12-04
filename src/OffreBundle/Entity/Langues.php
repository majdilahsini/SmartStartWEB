<?php

namespace OffreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langues
 *
 * @ORM\Table(name="langues")
 * @ORM\Entity
 */
class Langues
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
     * @ORM\Column(name="nom", type="string", length=11, nullable=false)
     */
    private $nom;

    /**
     * @return int
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param int $ref
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }


}

