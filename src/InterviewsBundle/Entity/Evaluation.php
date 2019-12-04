<?php

namespace InterviewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", indexes={@ORM\Index(name="ref_entretien", columns={"ref_entretien"})})
 * @ORM\Entity(repositoryClass="InterviewsBundle\Repository\EvaluationRepository")
 */
class Evaluation
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
     * @ORM\Column(name="evaluation", type="string", length=50, nullable=false)
     */
    private $evaluation;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Interview")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_entretien", referencedColumnName="ref_ent")
     * })
     */
    private $refEntretien;

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
    public function getEvaluation()
    {
        return $this->evaluation;
    }

    /**
     * @param string $evaluation
     */
    public function setEvaluation($evaluation)
    {
        $this->evaluation = $evaluation;
    }

    /**
     * @return int
     */
    public function getRefEntretien()
    {
        return $this->refEntretien;
    }

    /**
     * @param int $refEntretien
     */
    public function setRefEntretien($refEntretien)
    {
        $this->refEntretien = $refEntretien;
    }


}

