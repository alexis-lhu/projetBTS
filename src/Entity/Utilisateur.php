<?php
// src/Entity/Utilisateur.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Utilisateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * @ORM\Column(type="string")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $adresseEmail;

    /**
     * @ORM\Column(type="string")
     */
    private $motDePasse;

    /**
     * @ORM\Column(type="string")
     */
    private $role; // Peut être géré en utilisant un enum ou en relation avec une autre entité pour les rôles.

    /**
     * @ORM\OneToMany(mappedBy="utilisateur", targetEntity="Commande")
     */
    private Collection $commandes;

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }

    // Getters and setters...

    /**
     * Get the value of id
     */ 
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Get the value of adresseEmail
     */ 
    public function getAdresseEmail(): ?string
    {
        return $this->adresseEmail;
    }

    /**
     * Set the value of adresseEmail
     *
     * @return  self
     */ 
    public function setAdresseEmail(string $adresseEmail): self
    {
        $this->adresseEmail = $adresseEmail;
        return $this;
    }

    /**
     * Get the value of motDePasse
     */ 
    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    /**
     * Set the value of motDePasse
     *
     * @return  self
     */ 
    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;
        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Get the value of commandes
     */ 
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    // Additional properties and methods can be added here
}
