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
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumn(name="commande_id", referencedColumnName="id")
     */
    private $commande;

    /**
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumn(name="produit_id", referencedColumnName="id")
     */
    private $produit;

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

    // Autres propriétés et méthodes
}
?>