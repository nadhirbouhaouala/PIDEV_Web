<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="fk_id_emeteur", columns={"id_emeteur"}) , @ORM\Index(name="reclamation_ibfk_1", columns={"id_cible"})})
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

//   /**
//     * @var integer
//     * @ORM\ManyToOne(targetEntity="ReclamationBundle\Entity\Membre")
//     * @ORM\JoinColumn(name="id_emeteur",referencedColumnName="idUsr")
//    */
//    /**
//    * @var integer
//     *
//     * @ORM\Column(name="id_emeteur", type="integer", nullable=false)
//     */
    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_emeteur", referencedColumnName="idUsr")
     * })
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
     * @return int
     */
    public function getIdrecl()
    {
        return $this->idrecl;
    }

    /**
     * @param int $idrecl
     * @return Reclamation
     */
    public function setIdrecl($idrecl)
    {
        $this->idrecl = $idrecl;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdEmeteur()
    {
        return $this->idEmeteur;
    }

    /**
     * @param int $idEmeteur
     * @return Reclamation
     */

    public function setIdEmeteur($idEmeteur)
    {
        $this->idEmeteur = $idEmeteur;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCible()
    {
        return $this->idCible;
    }

    /**
     * @param int $idCible
     * @return Reclamation
     */
    public function setIdCible($idCible)
    {
        $this->idCible = $idCible;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Reclamation
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }



    /**
     * @return bool
     */
    public function isEtat()
    {
        return $this->etat;
    }

    /**
     * @param bool $etat
     * @return Reclamation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
        return $this;
    }

    /**
     * @return string
     */
    public function getSelecteur()
    {
        return $this->selecteur;
    }

    /**
     * @param string $selecteur
     * @return Reclamation
     */
    public function setSelecteur($selecteur)
    {
        $this->selecteur = $selecteur;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Reclamation
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }


}

