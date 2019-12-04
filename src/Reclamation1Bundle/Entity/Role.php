<?php

namespace Reclamation1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
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
     * @ORM\Column(name="rolename", type="string", length=100, nullable=false)
     */
    private $rolename;

    /**
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable=false)
     */
    private $number;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rolename
     *
     * @param string $rolename
     *
     * @return Role
     */
    public function setRolename($rolename)
    {
        $this->rolename = $rolename;
    
        return $this;
    }

    /**
     * Get rolename
     *
     * @return string
     */
    public function getRolename()
    {
        return $this->rolename;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Role
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }
}
