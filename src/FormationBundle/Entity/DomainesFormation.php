<?php

namespace FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Entity\Users;

/**
 * DomainesFormation
 * @ORM\Entity(repositoryClass="FormationBundle\Repository\DomainesFormationRepository")
 * @ORM\Table(name="domainesformation", indexes={@ORM\Index(name="entreprise_id", columns={"entreprise_id"})})
 * @ORM\Entity
 */
class DomainesFormation
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
     * @ORM\Column(name="nom_domaine", type="string", length=200, nullable=false)
     */
    private $nomDomaine;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entreprise_id", referencedColumnName="id")
     * })
     */
    private $entreprise;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNomDomaine()
    {
        return $this->nomDomaine;
    }

    /**
     * @param string $nomDomaine
     */
    public function setNomDomaine($nomDomaine)
    {
        $this->nomDomaine = $nomDomaine;
    }

    /**
     * @return Users
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param Users $entreprise
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
    }


}

