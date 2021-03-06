<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Visiteursmedicaux
 *
 * @ORM\Table(name="VISITEURSMEDICAUX")
 * @ORM\Entity
 */
class Visiteursmedicaux implements UserInterface, \Serializable
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
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOGIN", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MDP", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $mdp;



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
     * Get the value of mdp
     *
     * @return  string|null
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @param  string|null  $mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get the value of login
     *
     * @return  string|null
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @param  string|null  $login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return  string|null
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param  string|null  $prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return  string|null
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string|null  $nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getUsername()
    {
        return $this->login;
    }

    public function getPassword()
    {
        return $this->mdp;
    }




    public function getSalt()
    // Peut ??tre utilise dans certaines methodes de chiffrement.
    // On ne l???utilisera pas ici donc on renvoie null
    {
        return null;
    }

    public function getRoles()
    // Cette m??thode renvoie la liste des r??les de l???utilisateur
    // dans notre cas, on ne g??re pas plusieurs r??les donc on va simplement re nvoyer un tableau avec le role administrateur (ROLE_ADMIN)
    {
        return array('ROLE_ADMIN');
    }

    public function eraseCredentials()
    // Peut permettre de supprimer des informations sensibles qui auraient ??t?? stock??es dans l???entit??
    // Dans notre cas, il n???y a pas d???informations sensibles donc on laisse le corps de cette m??thode vide
    {}

    /** 
     * @see \Serializable::serialize() 
     * 
     */ 
    public function serialize()
    // Fonction qui sert ?? transformer notre objet en cha??ne
    {
        return serialize(array(
            $this->id,
            $this->login,
            $this->mdp,
        ));
    }

    /** 
     * @see \Serializable::unserialize() 
    */ 
    public function unserialize($serialized)
    // Fonction qui sert ?? convertir une cha??ne en objet
    {
        list(
        $this->id,
        $this->login,
        $this->mdp,
    ) = unserialize($serialized);
    }
}
