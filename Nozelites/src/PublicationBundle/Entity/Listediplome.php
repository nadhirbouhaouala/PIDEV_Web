<?php

namespace PublicationBundle\Entity;

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
     * @var integer
     *
     * @ORM\Column(name="organisation", type="integer", nullable=false)
     */
    private $organisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="domaine", type="integer", nullable=false)
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

