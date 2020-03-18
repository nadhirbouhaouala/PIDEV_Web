<?php

namespace NozelitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="fk_id_emeteur", columns={"id_emeteur"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idRecl", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecl;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_emeteur", type="integer", nullable=false)
     */
    private $idEmeteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cible", type="integer", nullable=false)
     */
    private $idCible;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=256, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="selecteur", type="string", length=255, nullable=false)
     */
    private $selecteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;



    /**
     * Get idrecl
     *
     * @return integer
     */
    public function getIdrecl()
    {
        return $this->idrecl;
    }

    /**
     * Set idEmeteur
     *
     * @param integer $idEmeteur
     *
     * @return Reclamation
     */
    public function setIdEmeteur($idEmeteur)
    {
        $this->idEmeteur = $idEmeteur;

        return $this;
    }

    /**
     * Get idEmeteur
     *
     * @return integer
     */
    public function getIdEmeteur()
    {
        return $this->idEmeteur;
    }

    /**
     * Set idCible
     *
     * @param integer $idCible
     *
     * @return Reclamation
     */
    public function setIdCible($idCible)
    {
        $this->idCible = $idCible;

        return $this;
    }

    /**
     * Get idCible
     *
     * @return integer
     */
    public function getIdCible()
    {
        return $this->idCible;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Reclamation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Reclamation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set selecteur
     *
     * @param string $selecteur
     *
     * @return Reclamation
     */
    public function setSelecteur($selecteur)
    {
        $this->selecteur = $selecteur;

        return $this;
    }

    /**
     * Get selecteur
     *
     * @return string
     */
    public function getSelecteur()
    {
        return $this->selecteur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reclamation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
