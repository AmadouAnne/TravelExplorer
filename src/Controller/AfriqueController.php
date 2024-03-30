<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AfriqueController extends AbstractController
{
    #[Route('/afrique', name: 'afrique')]
    public function index(): Response
    {
        // Définir les informations statiques pour les 5 pays d'Afrique
        $countries = [
            ['id' => 1, 'name' => 'Nigeria', 'description' => 'Description du Nigeria'],
            ['id' => 2, 'name' => 'Égypte', 'description' => 'Description de l\'Égypte'],
            ['id' => 3, 'name' => 'Afrique du Sud', 'description' => 'Description de l\'Afrique du Sud'],
            ['id' => 4, 'name' => 'Kenya', 'description' => 'Description du Kenya'],
            ['id' => 5, 'name' => 'Éthiopie', 'description' => 'Description de l\'Éthiopie'],
        ];

        return $this->render('afrique/index.html.twig', [
            'countries' => $countries,
        ]);
    }
}
