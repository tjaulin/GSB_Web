<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depenseforfetaire
 *
 * @ORM\Table(name="DEPENSEFORFETAIRE", indexes={@ORM\Index(name="I_FK_DEPENSEFORFETAIRE_FICHEFRAIS", columns={"ID_AVOIR2"}), @ORM\Index(name="I_FK_DEPENSEFORFETAIRE_TYPE", columns={"ID_TYPER"})})
 * @ORM\Entity
 */
class Depenseforfetaire
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
     * @var int|null
     *
     * @ORM\Column(name="QTE", type="integer", nullable=true)
     */
    private $qte;

    /**
     * @var \Fichefrais
     *
     * @ORM\ManyToOne(targetEntity="Fichefrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_AVOIR2", referencedColumnName="ID")
     * })
     */
    private $idAvoir2;

    /**
     * @var \Type
     *
     * @ORM\ManyToOne(targetEntity="Type")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TYPER", referencedColumnName="ID")
     * })
     */
    private $idTyper;



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
     * Get the value of qte
     *
     * @return  int|null
     */ 
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set the value of qte
     *
     * @param  int|null  $qte
     *
     * @return  self
     */ 
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get the value of idAvoir2
     *
     * @return  \Fichefrais
     */ 
    public function getIdAvoir2()
    {
        return $this->idAvoir2;
    }

    /**
     * Set the value of idAvoir2
     *
     * @param  \Fichefrais  $idAvoir2
     *
     * @return  self
     */ 
    public function setIdAvoir2(Fichefrais $idAvoir2)
    {
        $this->idAvoir2 = $idAvoir2;

        return $this;
    }

    /**
     * Get the value of idTyper
     *
     * @return  \Type
     */ 
    public function getIdTyper()
    {
        return $this->idTyper;
    }

    /**
     * Set the value of idTyper
     *
     * @param  \Type  $idTyper
     *
     * @return  self
     */ 
    public function setIdTyper(Type $idTyper)
    {
        $this->idTyper = $idTyper;

        return $this;
    }
}
