<?php
// src/Entity/Commande.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?Utilisateur $utilisateur = null;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCommande;

    /**
     * @ORM\Column(type="string")
     */
    private $statut;

    /**
     * @ORM\OneToMany(mappedBy="commande", targetEntity="DetailCommande")
     */
    private Collection $detailsCommande;

    public function __construct()
    {
        $this->detailsCommande = new ArrayCollection();
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
     * Get the value of utilisateur
     */ 
    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    /**
     * Set the value of utilisateur
     *
     * @return  self
     */ 
    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;
        return $this;
    }

    /**
     * Get the value of dateCommande
     */ 
    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    /**
     * Set the value of dateCommande
     *
     * @return  self
     */ 
    public function setDateCommande(\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;
        return $this;
    }

    /**
     * Get the value of statut
     */ 
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    /**
     * Get the value of detailsCommande
     */ 
    public function getDetailsCommande(): Collection
    {
        return $this->detailsCommande;
    }

    // Additional properties and methods can be added here
}
