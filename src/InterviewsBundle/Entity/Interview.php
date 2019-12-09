<?php

namespace InterviewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Interview
 *
 * @ORM\Table(name="interview", indexes={@ORM\Index(name="offre_id", columns={"offre_id"})})
 * @ORM\Entity(repositoryClass="InterviewsBundle\Repository\InterviewRepository")
 */
class Interview
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_ent", type="date", nullable=false)
     */
    private $dateEnt;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_ent", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="champ obligatoire obligatoire")
     * @Assert\Regex(
     * pattern = "/^(2[0-3]|[01]?[0-9]):([0-5]?[0-9])$/",
     * match=true,
     * message="l'heure doit etre de forme hh:mm"
     * )
     */
    private $heureEnt;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="OffresEnt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="offre_id", referencedColumnName="offre_id")
     * })
     */
    private $offre;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     * @return int
     */
    public function getRefEnt()
    {
        return $this->refEnt;
    }

    /**
     * @param int $refEnt
     */
    public function setRefEnt($refEnt)
    {
        $this->refEnt = $refEnt;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnt()
    {
        return $this->dateEnt;
    }

    /**
     * @param \DateTime $dateEnt
     */
    public function setDateEnt($dateEnt)
    {
        $this->dateEnt = $dateEnt;
    }

    /**
     * @return string
     */
    public function getHeureEnt()
    {
        return $this->heureEnt;
    }

    /**
     * @param string $heureEnt
     */
    public function setHeureEnt($heureEnt)
    {
        $this->heureEnt = $heureEnt;
    }

    /**
     * @return int
     */
    public function getOffre()
    {
        return $this->offre;
    }

    /**
     * @param int $offre
     */
    public function setOffre($offre)
    {
        $this->offre = $offre;
    }

    /**
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }


}

