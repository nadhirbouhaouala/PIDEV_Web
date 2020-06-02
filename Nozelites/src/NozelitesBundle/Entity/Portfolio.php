<?php

namespace NozelitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Portfolio
 *
 * @ORM\Table(name="portfolio", indexes={@ORM\Index(name="Fk_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Portfolio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_port", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPort;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_membre", type="integer", nullable=false)
     */
    private $idMembre;

    /**
     *
     * @Assert\NotBlank(message = "Champ obligatoire")
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     * @Assert\NotBlank(
     *     message = "Champ obligatoire"
     * )
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *@Assert\NotBlank(
     *     message = "Champ obligatoire"
     * )
     * @Assert\Url(
     *    message = "Ce lien n'est pas valide",
     * )
     *
     * @ORM\Column(name="lien", type="string", length=255, nullable=false)
     */
    private $lien;



    /**
     * Get idPort
     *
     * @return integer
     */
    public function getIdPort()
    {
        return $this->idPort;
    }

    /**
     * Set idMembre
     *
     * @param integer $idMembre
     *
     * @return Portfolio
     */
    public function setIdMembre($idMembre)
    {
        $this->idMembre = $idMembre;

        return $this;
    }

    /**
     * Get idMembre
     *
     * @return integer
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Portfolio
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Portfolio
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
     * Set lien
     *
     * @param string $lien
     *
     * @return Portfolio
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }
}
