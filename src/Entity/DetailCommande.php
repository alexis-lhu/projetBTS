<?php
// src/Entity/DetailCommande.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class DetailCommande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Produit", inversedBy="detailsCommande")
     * @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     */
    private ?Produit $produit = null;

    /**
     * @ORM\ManyToOne(targetEntity="Commande", inversedBy="detailsCommande")
     * @ORM\JoinColumn(name="commande_id", referencedColumnName="id")
     */
    private ?Commande $commande = null;

    /**
     * @ORM\Column(type="string")
     */
    private $pointure;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $sousTotal;

    // Getters and setters...

    /**
     * Get the value of id
     */ 
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get the value of produit
     */ 
    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    /**
     * Set the value of produit
     *
     * @return  self
     */ 
    public function setProduit(?Produit $produit): self
    {
        $this->produit = $produit;
        return $this;
    }

    /**
     * Get the value of commande
     */ 
    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    /**
     * Set the value of commande
     *
     * @return  self
     */ 
    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;
        return $this;
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
    public function setPointure(string $pointure): self
    {
        $this->pointure = $pointure;
        return $this;
    }

    /**
     * Get the value of quantite
     */ 
    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    /**
     * Set the value of quantite
     *
     * @return  self
     */ 
    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Get the value of sousTotal
     */ 
    public function getSousTotal(): ?string
    {
        return $this->sousTotal;
    }

    /**
     * Set the value of sousTotal
     *
     * @return  self
     */ 
    public function setSousTotal(string $sousTotal): self
    {
        $this->sousTotal = $sousTotal;
        return $this;
    }

    // Additional properties and methods can be added here
}
