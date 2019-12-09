<?php

namespace Project\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLangues
 *
 * @ORM\Table(name="user_langues", indexes={@ORM\Index(name="fk_user_id", columns={"user_id"}), @ORM\Index(name="fk_langue_id", columns={"langue_ref"})})
 * @ORM\Entity
 */
class UserLangues
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
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="langue_ref", type="integer", nullable=false)
     */
    private $langueRef;


}

