<?php

namespace PublicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity
 */
class Groupe
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_groupe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="autorisation", type="integer", nullable=false)
     */
    private $autorisation;


}

