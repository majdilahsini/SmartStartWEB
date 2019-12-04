<?php

namespace Formation\Entity;

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
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="langue1_ref", type="integer", nullable=false)
     */
    private $langue1Ref;

    /**
     * @var integer
     *
     * @ORM\Column(name="langue2_ref", type="integer", nullable=false)
     */
    private $langue2Ref;


}

