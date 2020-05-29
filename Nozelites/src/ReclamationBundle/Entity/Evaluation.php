<?php

namespace ReclamationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation")
 * @ORM\Entity(repositoryClass="ReclamationBundle\Repository\EvaluationRepository")
 */
class Evaluation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \Reclamation
     *
     * @ORM\ManyToOne(targetEntity="Reclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_r", referencedColumnName="idRecl")
     * })
     */
    private $idR;


    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer" )
     */
    private $rating ;


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
     * Set idR
     *
     * @param integer $idR
     *
     * @return Evaluation
     */
    public function setIdR($idR)
    {
        $this->idR = $idR;
    
        return $this;
    }

    /**
     * Get idR
     *
     * @return integer
     */
    public function getIdR()
    {
        return $this->idR;
    }



    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

}

