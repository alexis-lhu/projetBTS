<?php
// src/Entity/Produit.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Produit
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
    private $reference;

    /**
     * @ORM\Column(type="float")
     */
    private $prixVenteUnitaire;

    /**
     * @ORM\ManyToOne(targetEntity="CategorieProduit", inversedBy="produits")
     * @ORM\JoinColumn(nullable=false)
     */
    private ?CategorieProduit $categorie = null;

    /**
     * @ORM\OneToMany(mappedBy="produit", targetEntity="DetailCommande")
     */
    private Collection $detailsCommande;

    /**
     * @ORM\OneToMany(mappedBy="produit", targetEntity="Panier")
     */
    private Collection $paniers;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $pointure;

    public function __construct()
    {
        $this->detailsCommande = new ArrayCollection();
        $this->paniers = new ArrayCollection();
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
     * Get the value of reference
     */ 
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Set the value of reference
     *
     * @return  self
     */ 
    public function setReference(string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Get the value of prixVenteUnitaire
     */ 
    public function getPrixVenteUnitaire(): ?float
    {
        return $this->prixVenteUnitaire;
    }

    /**
     * Set the value of prixVenteUnitaire
     *
     * @return  self
     */ 
    public function setPrixVenteUnitaire(float $prixVenteUnitaire): self
    {
        $this->prixVenteUnitaire = $prixVenteUnitaire;
        return $this;
    }

    /**
     * Get the value of categorie
     */ 
    public function getCategorie(): ?CategorieProduit
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie(?CategorieProduit $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Get the value of detailsCommande
     */ 
    public function getDetailsCommande(): Collection
    {
        return $this->detailsCommande;
    }

    /**
     * Get the value of paniers
     */ 
    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    /**
     * Get the value of pointure
     */ 
    public function getPointure(): ?string
    {
        return $this->pointure;
    }

    /**
     * Set the value of pointure
     *
     * @return  self
     */ 
    public function setPointure(?string $pointure): self
    {
        $this->pointure = $pointure;
        return $this;
    }

    // Additional properties and methods can be added here
}
