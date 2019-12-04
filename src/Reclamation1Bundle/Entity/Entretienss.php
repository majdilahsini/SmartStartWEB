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



    /**
     * Get refEnt
     *
     * @return integer
     */
    public function getRefEnt()
    {
        return $this->refEnt;
    }

    /**
     * Set idEntreprise
     *
     * @param integer $idEntreprise
     *
     * @return Entretienss
     */
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;
    
        return $this;
    }

    /**
     * Get idEntreprise
     *
     * @return integer
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Set idCondidat
     *
     * @param integer $idCondidat
     *
     * @return Entretienss
     */
    public function setIdCondidat($idCondidat)
    {
        $this->idCondidat = $idCondidat;
    
        return $this;
    }

    /**
     * Get idCondidat
     *
     * @return integer
     */
    public function getIdCondidat()
    {
        return $this->idCondidat;
    }

    /**
     * Set posteEnt
     *
     * @param string $posteEnt
     *
     * @return Entretienss
     */
    public function setPosteEnt($posteEnt)
    {
        $this->posteEnt = $posteEnt;
    
        return $this;
    }

    /**
     * Get posteEnt
     *
     * @return string
     */
    public function getPosteEnt()
    {
        return $this->posteEnt;
    }

    /**
     * Set dateEnt
     *
     * @param \DateTime $dateEnt
     *
     * @return Entretienss
     */
    public function setDateEnt($dateEnt)
    {
        $this->dateEnt = $dateEnt;
    
        return $this;
    }

    /**
     * Get dateEnt
     *
     * @return \DateTime
     */
    public function getDateEnt()
    {
        return $this->dateEnt;
    }

    /**
     * Set heureEnt
     *
     * @param string $heureEnt
     *
     * @return Entretienss
     */
    public function setHeureEnt($heureEnt)
    {
        $this->heureEnt = $heureEnt;
    
        return $this;
    }

    /**
     * Get heureEnt
     *
     * @return string
     */
    public function getHeureEnt()
    {
        return $this->heureEnt;
    }

    /**
     * Set descriptionEnt
     *
     * @param string $descriptionEnt
     *
     * @return Entretienss
     */
    public function setDescriptionEnt($descriptionEnt)
    {
        $this->descriptionEnt = $descriptionEnt;
    
        return $this;
    }

    /**
     * Get descriptionEnt
     *
     * @return string
     */
    public function getDescriptionEnt()
    {
        return $this->descriptionEnt;
    }
}
