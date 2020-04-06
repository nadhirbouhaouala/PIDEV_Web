<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupeMembre
 *
 * @ORM\Table(name="groupe_membre", indexes={@ORM\Index(name="FK_idG", columns={"id_groupe"}), @ORM\Index(name="FK_idM", columns={"id_membre"})})
 * @ORM\Entity
 */
class GroupeMembre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_gm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGm;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_invite", type="integer", nullable=false)
     */
    private $idInvite;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_groupe", referencedColumnName="id_groupe")
     * })
     */
    private $idGroupe;

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

