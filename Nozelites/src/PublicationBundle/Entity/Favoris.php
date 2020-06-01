<?php

namespace PublicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favoris
 *
 * @ORM\Table(name="favoris", indexes={@ORM\Index(name="FK_FAV_MEMBRE", columns={"id_membre"}), @ORM\Index(name="FK_FAV_PUBLC", columns={"id_pub"})})
 * @ORM\Entity
 */
class Favoris
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_fav", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFav;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="idUsr")
     * })
     */
    private $idMembre;

    /**
     * @var \Publication
     *
     * @ORM\ManyToOne(targetEntity="Publication")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pub", referencedColumnName="id")
     * })
     */
    private $idPub;

    /**
     * @return int
     */
    public function getIdFav()
    {
        return $this->idFav;
    }

    /**
     * @param int $idFav
     */
    public function setIdFav($idFav)
    {
        $this->idFav = $idFav;
    }

    /**
     * @return \Membre
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * @param \Membre $idMembre
     */
    public function setIdMembre($idMembre)
    {
        $this->idMembre = $idMembre;
    }

    /**
     * @return \Publication
     */
    public function getIdPub()
    {
        return $this->idPub;
    }

    /**
     * @param \Publication $idPub
     */
    public function setIdPub($idPub)
    {
        $this->idPub = $idPub;
    }


}

