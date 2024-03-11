<?php
// src/Entity/Utilisateur.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
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

    // Autres propriétés et méthodes
}

















?>