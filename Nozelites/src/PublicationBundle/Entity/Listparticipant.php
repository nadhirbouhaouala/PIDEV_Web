<?php

namespace PublicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listparticipant
 *
 * @ORM\Table(name="listparticipant", indexes={@ORM\Index(name="fk_ide", columns={"idE"}), @ORM\Index(name="id_m", columns={"idm"})})
 * @ORM\Entity
 */
class Listparticipant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ide;

    /**
     * @var integer
     *
     * @ORM\Column(name="idm", type="integer", nullable=false)
     */
    private $idm;

    /**
     * @var integer
     *
     * @ORM\Column(name="etatp", type="integer", nullable=false)
     */
    private $etatp;


}

