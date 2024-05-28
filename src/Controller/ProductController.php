<?php
// src/Controller/ProductController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;

class ProductController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/homme", name="product_list")
     */
    public function homme(Request $request): Response
    {
        // Récupérer les produits depuis la base de données
        $categoryId = $request->query->get('category_id', 1);

        // Récupérer les produits de la catégorie spécifiée depuis la base de données
        $products = $this->entityManager->createQueryBuilder()
            ->select('p')
            ->from(Produit::class, 'p')
            ->where('p.categorie = :categoryId')  // Assurez-vous que 'categorie' est le nom correct du champ dans votre entité Produit
            ->setParameter('categoryId', $categoryId)
            ->getQuery()
            ->getResult();

        // Passer les produits au modèle Twig pour affichage
        return $this->render('home/homme.html.twig', [
            'products' => $products,
        ]);
    }

    public function femme(Request $request): Response
    {
        // Récupérer les produits depuis la base de données
        $categoryId = $request->query->get('category_id', 2);

        // Récupérer les produits de la catégorie spécifiée depuis la base de données
        $products = $this->entityManager->createQueryBuilder()
            ->select('p')
            ->from(Produit::class, 'p')
            ->where('p.categorie = :categoryId')  // Assurez-vous que 'categorie' est le nom correct du champ dans votre entité Produit
            ->setParameter('categoryId', $categoryId)
            ->getQuery()
            ->getResult();

        // Passer les produits au modèle Twig pour affichage
        return $this->render('home/femme.html.twig', [
            'products' => $products,
        ]);
    }

    public function enfant(Request $request): Response
    {
        // Récupérer les produits depuis la base de données
        $categoryId = $request->query->get('category_id', 3);

        // Récupérer les produits de la catégorie spécifiée depuis la base de données
        $products = $this->entityManager->createQueryBuilder()
            ->select('p')
            ->from(Produit::class, 'p')
            ->where('p.categorie = :categoryId')  // Assurez-vous que 'categorie' est le nom correct du champ dans votre entité Produit
            ->setParameter('categoryId', $categoryId)
            ->getQuery()
            ->getResult();

        // Passer les produits au modèle Twig pour affichage
        return $this->render('home/enfant.html.twig', [
            'products' => $products,
        ]);
    }
}
?>