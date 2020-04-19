<?php

namespace NozelitesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="fk_destinataire", columns={"id_destinataire"}), @ORM\Index(name="fk_emetteur", columns={"id_emeteur"})})
 * @ORM\Entity
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idMessage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmessage;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=255, nullable=false)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=30, nullable=false)
     */
    private $date;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_destinataire", referencedColumnName="idUsr")
     * })
     */
    private $idDestinataire;

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
     * Get idmessage
     *
     * @return integer
     */
    public function getIdmessage()
    {
        return $this->idmessage;
    }

    /**
     * @param int $idmessage
     */
    public function setIdmessage($idmessage)
    {
        $this->idmessage = $idmessage;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Message
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set texte
     *
     * @param string $texte
     *
     * @return Message
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Message
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
     * Set idDestinataire
     *
     * @param \NozelitesBundle\Entity\Membre $idDestinataire
     *
     * @return Message
     */
    public function setIdDestinataire(\NozelitesBundle\Entity\Membre $idDestinataire = null)
    {
        $this->idDestinataire = $idDestinataire;

        return $this;
    }

    /**
     * Get idDestinataire
     *
     * @return \NozelitesBundle\Entity\Membre
     */
    public function getIdDestinataire()
    {
        return $this->idDestinataire;
    }

    /**
     * Set idEmeteur
     *
     * @param \NozelitesBundle\Entity\Membre $idEmeteur
     *
     * @return Message
     */
    public function setIdEmeteur(\NozelitesBundle\Entity\Membre $idEmeteur = null)
    {
        $this->idEmeteur = $idEmeteur;

        return $this;
    }

    /**
     * Get idEmeteur
     *
     * @return \NozelitesBundle\Entity\Membre
     */
    public function getIdEmeteur()
    {
        return $this->idEmeteur;
    }
}
