<?php

namespace App\Controller;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;



class HomeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/", name="app_index")
     */
    public function index(): Response
    {
        // Rendre la vue de la page d'accueil
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/categorie/{type}", name="categorie")
     */
    public function categorie(string $type): Response
    {
        // Vérifier si la catégorie est correcte
        $allowedCategories = ['homme', 'femme', 'enfant', 'accessoire', 'panier', 'login' , 'register'];

        if (in_array($type, $allowedCategories)) {
            // La catégorie est correcte, rendre la vue appropriée
            return $this->render('home/' . $type . '.html.twig', ['type' => $type]);
        }

        // Si la catégorie n'est pas correcte, rediriger vers la page d'accueil
        return $this->redirectToRoute('app_index');
    }

    /**
     * @Route("/panier", name="panier")
     */
    public function panier(): Response
    {
        // Ajouter votre logique spécifique pour la page "Panier" ici
        return $this->render('home/panier.html.twig');
    }

    

    /**
     * @Route("/homme", name="afficher_produits")
     */
    public function afficherProduits(ProduitRepository $produitRepository): Response
    {
        // Utilisez la méthode personnalisée pour obtenir tous les produits
        $allProducts = $produitRepository->getAllProducts();

        return $this->render('homme.html.twig', [
            'produits' => $allProducts,
        ]);
    }
}
