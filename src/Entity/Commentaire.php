<?php
// src/Entity/Commentaire.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idProduit;

    /**
     * @ORM\Column(type="integer")
     */
    private $idUtilisateur;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbEtoile;

    /**
     * @ORM\Column(type="string")
     */
    private $commentaire;
}
?>