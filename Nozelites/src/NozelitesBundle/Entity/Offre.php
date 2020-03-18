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



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Offre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set entreprise
     *
     * @param string $entreprise
     *
     * @return Offre
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     *
     * @return Offre
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set poste
     *
     * @param string $poste
     *
     * @return Offre
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set requis
     *
     * @param string $requis
     *
     * @return Offre
     */
    public function setRequis($requis)
    {
        $this->requis = $requis;

        return $this;
    }

    /**
     * Get requis
     *
     * @return string
     */
    public function getRequis()
    {
        return $this->requis;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Offre
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
     * Set date
     *
     * @param string $date
     *
     * @return Offre
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Offre
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set idemetteur
     *
     * @param \NozelitesBundle\Entity\ChasseurTalent $idemetteur
     *
     * @return Offre
     */
    public function setIdemetteur(\NozelitesBundle\Entity\ChasseurTalent $idemetteur = null)
    {
        $this->idemetteur = $idemetteur;

        return $this;
    }

    /**
     * Get idemetteur
     *
     * @return \NozelitesBundle\Entity\ChasseurTalent
     */
    public function getIdemetteur()
    {
        return $this->idemetteur;
    }

    /**
     * Set idrecepteur
     *
     * @param \NozelitesBundle\Entity\Membre $idrecepteur
     *
     * @return Offre
     */
    public function setIdrecepteur(\NozelitesBundle\Entity\Membre $idrecepteur = null)
    {
        $this->idrecepteur = $idrecepteur;

        return $this;
    }

    /**
     * Get idrecepteur
     *
     * @return \NozelitesBundle\Entity\Membre
     */
    public function getIdrecepteur()
    {
        return $this->idrecepteur;
    }
}
