<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichefrais
 *
 * @ORM\Table(name="FICHEFRAIS", indexes={@ORM\Index(name="I_FK_FICHEFRAIS_ETAT", columns={"ID_ETRE"}), @ORM\Index(name="I_FK_FICHEFRAIS_VISITEURSMEDICAUX", columns={"ID_EFFECTUER"})})
 * @ORM\Entity
 */
class Fichefrais
{
    /**
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $libelle;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATEDEBUT", type="datetime", nullable=true)
     */
    private $datedebut;

    /**
     * @var \Etat
     *
     * @ORM\ManyToOne(targetEntity="Etat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ETRE", referencedColumnName="ID")
     * })
     */
    private $idEtre;

    /**
     * @var \Visiteursmedicaux
     *
     * @ORM\ManyToOne(targetEntity="Visiteursmedicaux")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_EFFECTUER", referencedColumnName="ID")
     * })
     */
    private $idEffectuer;



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     *
     * @return  string|null
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @param  string|null  $libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of datedebut
     *
     * @return  \DateTime|null
     */ 
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set the value of datedebut
     *
     * @param  \DateTime|null  $datedebut
     *
     * @return  self
     */ 
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get the value of idEtre
     *
     * @return  \Etat
     */ 
    public function getIdEtre()
    {
        return $this->idEtre;
    }

    /**
     * Set the value of idEtre
     *
     * @param  \Etat  $idEtre
     *
     * @return  self
     */ 
    public function setIdEtre(Etat $idEtre)
    {
        $this->idEtre = $idEtre;

        return $this;
    }

    /**
     * Get the value of idEffectuer
     *
     * @return  \Visiteursmedicaux
     */ 
    public function getIdEffectuer()
    {
        return $this->idEffectuer;
    }

    /**
     * Set the value of idEffectuer
     *
     * @param  \Visiteursmedicaux  $idEffectuer
     *
     * @return  self
     */ 
    public function setIdEffectuer(Visiteursmedicaux $idEffectuer)
    {
        $this->idEffectuer = $idEffectuer;

        return $this;
    }
}
