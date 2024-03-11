<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
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
    private $categorie;

    /**
     * @ORM\OneToMany(targetEntity="DetailCommande", mappedBy="produit")
     */
    private $detailsCommande;

    /**
     * @ORM\OneToMany(targetEntity="Panier", mappedBy="produit")
     */
    private $paniers;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $pointure;

    // ... autres propriétés, constructeur, méthodes, etc.

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getPrixVenteUnitaire(): ?float
    {
        return $this->prixVenteUnitaire;
    }

    public function setPrixVenteUnitaire(float $prixVenteUnitaire): self
    {
        $this->prixVenteUnitaire = $prixVenteUnitaire;

        return $this;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getDetailsCommande()
    {
        return $this->detailsCommande;
    }

    public function setDetailsCommande($detailsCommande): self
    {
        $this->detailsCommande = $detailsCommande;

        return $this;
    }

    public function getPaniers()
    {
        return $this->paniers;
    }

    public function setPaniers($paniers): self
    {
        $this->paniers = $paniers;

        return $this;
    }

    public function getPointure(): ?string
    {
        return $this->pointure;
    }

    public function setPointure(?string $pointure): self
    {
        $this->pointure = $pointure;

        return $this;
    }

    // ... autres getters et setters
}
