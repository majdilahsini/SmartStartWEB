<?php

namespace InterviewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffresEnt
 *
 * @ORM\Table(name="offres_ent", indexes={@ORM\Index(name="id_condidat", columns={"id_condidat"}), @ORM\Index(name="id_entreprise", columns={"id_entreprise"})})
 * @ORM\Entity
 */
class OffresEnt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="offre_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $offreId;

    /**
     * @var string
     *
     * @ORM\Column(name="lettre_motivation", type="string", length=200, nullable=false)
     */
    private $lettreMotivation;

    /**
     * @var string
     *
     * @ORM\Column(name="poste", type="string", length=50, nullable=false)
     */
    private $poste;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_condidat", referencedColumnName="id")
     * })
     */
    private $idCondidat;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entreprise", referencedColumnName="id")
     * })
     */
    private $idEntreprise;

    /**
     * @return int
     */
    public function getOffreId()
    {
        return $this->offreId;
    }

    /**
     * @param int $offreId
     */
    public function setOffreId($offreId)
    {
        $this->offreId = $offreId;
    }

    /**
     * @return string
     */
    public function getLettreMotivation()
    {
        return $this->lettreMotivation;
    }

    /**
     * @param string $lettreMotivation
     */
    public function setLettreMotivation($lettreMotivation)
    {
        $this->lettreMotivation = $lettreMotivation;
    }

    /**
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * @param string $poste
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    }

    /**
     * @return int
     */
    public function getIdCondidat()
    {
        return $this->idCondidat;
    }

    /**
     * @param int $idCondidat
     */
    public function setIdCondidat($idCondidat)
    {
        $this->idCondidat = $idCondidat;
    }

    /**
     * @return int
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * @param int $idEntreprise
     */
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;
    }


}

