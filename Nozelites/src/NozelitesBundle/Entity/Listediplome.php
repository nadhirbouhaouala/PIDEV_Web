<?php

namespace NozelitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listediplome
 *
 * @ORM\Table(name="listediplome", indexes={@ORM\Index(name="FK_id_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Listediplome
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_diplome", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDiplome;

    /**
     * @var string
     *
     * @ORM\Column(name="organisation", type="string", length=255, nullable=false)
     */
    private $organisation;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=255, nullable=false)
     */
    private $domaine;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255, nullable=false)
     */
    private $date;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fos", referencedColumnName="id")
     * })
     */
    private $idMembre;

    /**
     * @var \Membre
     *@ORM\Column(name="id_membre", type="integer", nullable=false)
     *
     */
    private $Membre;

    /**
     * @return \Membre
     */
    public function getMembre()
    {
        return $this->Membre;
    }

    /**
     * @param int $Membre
     */
    public function setMembre($Membre)
    {
        $this->Membre = $Membre;
    }



    /**
     * Get idDiplome
     *
     * @return integer
     */
    public function getIdDiplome()
    {
        return $this->idDiplome;
    }

    /**
     * Set organisation
     *
     * @param string $organisation
     *
     * @return Listediplome
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return string
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     *
     * @return Listediplome
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
     * Set date
     *
     * @param string $date
     *
     * @return Listediplome
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
     * Set idMembre
     *
     * @param \NozelitesBundle\Entity\Membre $idMembre
     *
     * @return Listediplome
     */
    public function setIdMembre($idMembre)
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
}
