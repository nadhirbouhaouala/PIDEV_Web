<?php

namespace PublicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", uniqueConstraints={@ORM\UniqueConstraint(name="nom", columns={"nom"})}, indexes={@ORM\Index(name="FK_idCreateur", columns={"idc"})})
 * @ORM\Entity
 */
class Evenement
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=false)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure", type="time", nullable=false)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="siteWeb", type="string", length=255, nullable=false)
     */
    private $siteweb;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbParticipant", type="integer", nullable=false)
     */
    private $nbparticipant;

    /**
     * @var integer
     *
     * @ORM\Column(name="NbPlace", type="integer", nullable=false)
     */
    private $nbplace;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idc", referencedColumnName="idUsr")
     * })
     */
    private $idc;


}

