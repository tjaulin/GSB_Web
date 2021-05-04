<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depensenonforfetaire
 *
 * @ORM\Table(name="DEPENSENONFORFETAIRE", indexes={@ORM\Index(name="I_FK_DEPENSENONFORFETAIRE_FICHEFRAIS", columns={"ID_AVOIR1"})})
 * @ORM\Entity
 */
class Depensenonforfetaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIBELLE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANT", type="decimal", precision=13, scale=2, nullable=true)
     */
    private $montant;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="VALIDATION", type="boolean", nullable=true)
     */
    private $validation;

    /**
     * @var \Fichefrais
     *
     * @ORM\ManyToOne(targetEntity="Fichefrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_AVOIR1", referencedColumnName="ID")
     * })
     */
    private $idAvoir1;



    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  int  $id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of date
     *
     * @return  \DateTime|null
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @param  \DateTime|null  $date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

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
     * Get the value of montant
     *
     * @return  string|null
     */ 
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set the value of montant
     *
     * @param  string|null  $montant
     *
     * @return  self
     */ 
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get the value of validation
     *
     * @return  bool|null
     */ 
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set the value of validation
     *
     * @param  bool|null  $validation
     *
     * @return  self
     */ 
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get the value of idAvoir1
     *
     * @return  \Fichefrais
     */ 
    public function getIdAvoir1()
    {
        return $this->idAvoir1;
    }

    /**
     * Set the value of idAvoir1
     *
     * @param  \Fichefrais  $idAvoir1
     *
     * @return  self
     */ 
    public function setIdAvoir1(Fichefrais $idAvoir1)
    {
        $this->idAvoir1 = $idAvoir1;

        return $this;
    }
}
