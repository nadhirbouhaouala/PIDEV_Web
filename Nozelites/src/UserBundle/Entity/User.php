<?php
// src/AppBundle/Entity/User.php

namespace UserBundle\Entity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @Vich\Uploadable
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     *
     * @ORM\Column(type="string",length=255)
     *
     */
    protected $nom;
    /**
     *
     * @ORM\Column(type="string",length =255)
     *
     */
    protected $prenom;
    /**
     *
     * @ORM\Column(type="integer")
     *
     */
    protected $telephone;
    /**
     *
     * @ORM\Column(type="integer")
     *
     */
    protected $age;



    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }


    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="profile_image", fileNameProperty="imageName")
     *
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string")
     *
     * @var string|null
     */
    private $imageName;



    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTimeInterface|null
     */
    private $updatedAt;



    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(File $imageFile = null)
    {
        $this->imageFile = $imageFile;

        if ($imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImageName(?string $image)
    {
        $this->imageName = $image;

    }

    public function getImageName()
    {
        return $this->imageName;
    }

    public function setImageSize(int $imageSize)
    {
        $this->imageSize = $imageSize;

    }

    public function getImageSize()
    {
        return $this->imageSize;
    }



}

