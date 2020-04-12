<?php

namespace ReclamationBundle\Entity;

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

    /**
     * @return int
     */
    public function getIde()
    {
        return $this->ide;
    }

    /**
     * @param int $ide
     * @return Evenement
     */
    public function setIde($ide)
    {
        $this->ide = $ide;
        return $this;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Evenement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param string $lieu
     * @return Evenement
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
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
     * @return Evenement
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @param \DateTime $heure
     * @return Evenement
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
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
     * @return Evenement
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteweb()
    {
        return $this->siteweb;
    }

    /**
     * @param string $siteweb
     * @return Evenement
     */
    public function setSiteweb($siteweb)
    {
        $this->siteweb = $siteweb;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbparticipant()
    {
        return $this->nbparticipant;
    }

    /**
     * @param int $nbparticipant
     * @return Evenement
     */
    public function setNbparticipant($nbparticipant)
    {
        $this->nbparticipant = $nbparticipant;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbplace()
    {
        return $this->nbplace;
    }

    /**
     * @param int $nbplace
     * @return Evenement
     */
    public function setNbplace($nbplace)
    {
        $this->nbplace = $nbplace;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return Evenement
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     * @return Evenement
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
        return $this;
    }

    /**
     * @return \Membre
     */
    public function getIdc()
    {
        return $this->idc;
    }

    /**
     * @param \Membre $idc
     * @return Evenement
     */
    public function setIdc($idc)
    {
        $this->idc = $idc;
        return $this;
    }


}

