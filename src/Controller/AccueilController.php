<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Commentaire;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Security\CustomAuthenticationSuccessHandler;
use ContainerFOAKfMN\getAjoutProduitService;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Mapping as ORM; 


class AccueilController extends AbstractController
{

    #[Route('/accueil', name: 'homepage')]
    public function index(EntityManagerInterface $entityManager): Response // Utiliser EntityManager injecté
    {
        $produit = $entityManager->getRepository(Produit::class)->findBy([], ['id' => 'DESC'], 5);

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
                'produit'=> $produit,
        ]);
    }



    //               route vers liste produits 
    #[Route('/liste-produits', name: 'liste_produits')]
    public function listeProduits(EntityManagerInterface $manager): Response
    {
        $produitRepository = $manager->getRepository(Produit::class);
        $tousProduits = $produitRepository->findAll();
    
        return $this->render('accueil/listeProduits.html.twig', [
            'tousProduits' => $tousProduits,
        ]);
    }



    #[Route('/produit/{id}', name: 'info-produit')]
    public function detailsProduit(EntityManagerInterface $entityManager, $id): Response
    {
        $produitRepository = $entityManager->getRepository(Produit::class);
        $produit = $produitRepository->find($id);

    

        return $this->render('accueil/infoProduit.html.twig', [
            'produit' => $produit,
            
        ]);
    }


    #[Route('/produit/{id}/ajout-commentaire', name: 'ajout_commentaire', methods: ['POST'])]
    public function addComment(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $produit = $entityManager->getRepository(Produit::class)->find($id);

        $titre = $request->request->get('titre');
        $contenu = $request->request->get('contenu');

        if (empty($titre) || empty($contenu)) {
            $this->addFlash('error', 'Veuillez remplir tous les champs s\'il vous plaît.');
    
            return $this->redirectToRoute('details_produit', ['id' => $id]);
        } else {
        $commentaire = new Commentaire();
        $commentaire->setTitre($titre);
        $commentaire->setContenue($contenu);
        $commentaire->setProduit($produit);

        $entityManager->persist($commentaire);
        $entityManager->flush();

        $this->addFlash('success', 'Commentaire ajouté avec succès.');

        return $this->redirectToRoute('details_produit', ['id' => $id]);
        }
    }


    
}
