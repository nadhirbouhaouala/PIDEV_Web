<?php

namespace PublicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     *  @Assert\NotBlank
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_groupe", type="integer", nullable=false)
     */
    private $idGroupe;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="\NozelitesBundle\Entity\Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_publicateur", referencedColumnName="idUsr")
     * })
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
     */
    public function setId($id)
    {
        $this->id = $id;
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
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
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
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     */
    public function setImage($image)
    {
        $this->image = $image;
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
     */
    public function setIdGroupe($idGroupe)
    {
        $this->idGroupe = $idGroupe;
    }

    /**
     * @return \Membre
     */
    public function getIdPublicateur()
    {
        return $this->idPublicateur;
    }

    /**
     * @param \Membre $idPublicateur
     */
    public function setIdPublicateur($idPublicateur)
    {
        $this->idPublicateur = $idPublicateur;
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
     */
    public function setNbJaime($nbJaime)
    {
        $this->nbJaime = $nbJaime;
    }


}

