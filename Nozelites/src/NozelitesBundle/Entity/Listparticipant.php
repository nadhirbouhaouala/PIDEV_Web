<?php

namespace NozelitesBundle\Entity;

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



    /**
     * Get ide
     *
     * @return integer
     */
    public function getIde()
    {
        return $this->ide;
    }

    /**
     * Set idm
     *
     * @param integer $idm
     *
     * @return Listparticipant
     */
    public function setIdm($idm)
    {
        $this->idm = $idm;

        return $this;
    }

    /**
     * Get idm
     *
     * @return integer
     */
    public function getIdm()
    {
        return $this->idm;
    }

    /**
     * Set etatp
     *
     * @param integer $etatp
     *
     * @return Listparticipant
     */
    public function setEtatp($etatp)
    {
        $this->etatp = $etatp;

        return $this;
    }

    /**
     * Get etatp
     *
     * @return integer
     */
    public function getEtatp()
    {
        return $this->etatp;
    }
}
