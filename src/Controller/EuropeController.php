<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EuropeController extends AbstractController
{
    #[Route('/europe', name: 'europe')]
    public function index(): Response
    {
        return $this->render('europe/index.html.twig', [
            'controller_name' => 'EuropeController',
        ]);
    }
}
