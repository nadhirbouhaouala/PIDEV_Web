<?php

namespace NozelitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="FK_idEmetteur", columns={"IdEmetteur"}), @ORM\Index(name="Fk_idRecepteur", columns={"IdRecepteur"})})
 * @ORM\Entity
 */
class Offre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=30, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="Entreprise", type="string", length=30, nullable=false)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="Domaine", type="string", length=100, nullable=false)
     */
    private $domaine;

    /**
     * @var string
     *
     * @ORM\Column(name="Poste", type="string", length=100, nullable=false)
     */
    private $poste;

    /**
     * @var string
     *
     * @ORM\Column(name="Requis", type="string", length=250, nullable=false)
     */
    private $requis;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Date", type="string", length=30, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=30, nullable=false)
     */
    private $etat;

    /**
     * @var \ChasseurTalent
     *
     * @ORM\ManyToOne(targetEntity="ChasseurTalent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdEmetteur", referencedColumnName="idUsr")
     * })
     */
    private $idemetteur;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdRecepteur", referencedColumnName="idUsr")
     * })
     */
    private $idrecepteur;


}

