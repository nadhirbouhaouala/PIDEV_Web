<?php

namespace NozelitesBundle\Entity;

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
     * Get idFav
     *
     * @return integer
     */
    public function getIdFav()
    {
        return $this->idFav;
    }

    /**
     * Set idMembre
     *
     * @param \NozelitesBundle\Entity\Membre $idMembre
     *
     * @return Favoris
     */
    public function setIdMembre(\NozelitesBundle\Entity\Membre $idMembre = null)
    {
        $this->idMembre = $idMembre;

        return $this;
    }

    /**
     * Get idMembre
     *
     * @return \NozelitesBundle\Entity\Membre
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set idPub
     *
     * @param \NozelitesBundle\Entity\Publication $idPub
     *
     * @return Favoris
     */
    public function setIdPub(\NozelitesBundle\Entity\Publication $idPub = null)
    {
        $this->idPub = $idPub;

        return $this;
    }

    /**
     * Get idPub
     *
     * @return \NozelitesBundle\Entity\Publication
     */
    public function getIdPub()
    {
        return $this->idPub;
    }
}
