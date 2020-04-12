<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listediplome
 *
 * @ORM\Table(name="listediplome", indexes={@ORM\Index(name="FK_id_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Listediplome
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_diplome", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDiplome;

    /**
     * @var string
     *
     * @ORM\Column(name="organisation", type="string", length=11, nullable=false)
     */
    private $organisation;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=11, nullable=false)
     */
    private $domaine;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=false)
     */
    private $date;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="idUsr")
     * })
     */
    private $idMembre;


}

