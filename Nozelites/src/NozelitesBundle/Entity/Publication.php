<?php

namespace NozelitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publication
 *
 * @ORM\Table(name="publication", indexes={@ORM\Index(name="FK_groupe", columns={"id_groupe"}), @ORM\Index(name="FK_idpublicateur", columns={"id_publicateur"})})
 * @ORM\Entity
 */
class Publication
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_groupe", type="integer", nullable=false)
     */
    private $idGroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_publicateur", type="integer", nullable=false)
     */
    private $idPublicateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_jaime", type="integer", nullable=false)
     */
    private $nbJaime;



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
     * Set titre
     *
     * @param string $titre
     *
     * @return Publication
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
     * @return Publication
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
     * Set image
     *
     * @param string $image
     *
     * @return Publication
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set idGroupe
     *
     * @param integer $idGroupe
     *
     * @return Publication
     */
    public function setIdGroupe($idGroupe)
    {
        $this->idGroupe = $idGroupe;

        return $this;
    }

    /**
     * Get idGroupe
     *
     * @return integer
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }

    /**
     * Set idPublicateur
     *
     * @param integer $idPublicateur
     *
     * @return Publication
     */
    public function setIdPublicateur($idPublicateur)
    {
        $this->idPublicateur = $idPublicateur;

        return $this;
    }

    /**
     * Get idPublicateur
     *
     * @return integer
     */
    public function getIdPublicateur()
    {
        return $this->idPublicateur;
    }

    /**
     * Set nbJaime
     *
     * @param integer $nbJaime
     *
     * @return Publication
     */
    public function setNbJaime($nbJaime)
    {
        $this->nbJaime = $nbJaime;

        return $this;
    }

    /**
     * Get nbJaime
     *
     * @return integer
     */
    public function getNbJaime()
    {
        return $this->nbJaime;
    }
}
