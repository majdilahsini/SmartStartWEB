<?php

namespace OffreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLangues
 *
 * @ORM\Table(name="user_langues", indexes={@ORM\Index(name="fk_user_id", columns={"langue1_ref"}), @ORM\Index(name="fk_langue_id", columns={"langue2_ref"})})
 * @ORM\Entity
 */
class UserLangues
{
    /**
     * @var \UserBundle\Entity\Users
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Langues
     *
     * @ORM\ManyToOne(targetEntity="Langues")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="langue1_ref", referencedColumnName="ref")
     * })
     */
    private $langue1Ref;

    /**
     * @var \Langues
     *
     * @ORM\ManyToOne(targetEntity="Langues")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="langue2_ref", referencedColumnName="ref")
     * })
     */
    private $langue2Ref;

    /**
     * @return \UserBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \UserBundle\Entity\Users $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return int
     */


    /**
     * @return \Langues
     */
    public function getLangue1Ref()
    {
        return $this->langue1Ref;
    }

    /**
     * @param \Langues $langue1Ref
     */
    public function setLangue1Ref($langue1Ref)
    {
        $this->langue1Ref = $langue1Ref;
    }

    /**
     * @return \Langues
     */
    public function getLangue2Ref()
    {
        return $this->langue2Ref;
    }

    /**
     * @param \Langues $langue2Ref
     */
    public function setLangue2Ref($langue2Ref)
    {
        $this->langue2Ref = $langue2Ref;
    }




}

