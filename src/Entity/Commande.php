<?php
// src/Entity/Commande.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="commandes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCommande;

    /**
     * @ORM\Column(type="string")
     */
    private $statut;

    /**
     * @ORM\OneToMany(targetEntity="DetailCommande", mappedBy="commande")
     */
    private $detailsCommande;

    // ... autres relations, constructeur et méthodes
}
?>