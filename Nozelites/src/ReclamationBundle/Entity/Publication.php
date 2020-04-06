<?php

namespace ReclamationBundle\Entity;

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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Publication
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     * @return Publication
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
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
     * @return Publication
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     * @return Publication
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }

    /**
     * @param int $idGroupe
     * @return Publication
     */
    public function setIdGroupe($idGroupe)
    {
        $this->idGroupe = $idGroupe;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdPublicateur()
    {
        return $this->idPublicateur;
    }

    /**
     * @param int $idPublicateur
     * @return Publication
     */
    public function setIdPublicateur($idPublicateur)
    {
        $this->idPublicateur = $idPublicateur;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbJaime()
    {
        return $this->nbJaime;
    }

    /**
     * @param int $nbJaime
     * @return Publication
     */
    public function setNbJaime($nbJaime)
    {
        $this->nbJaime = $nbJaime;
        return $this;
    }


}

