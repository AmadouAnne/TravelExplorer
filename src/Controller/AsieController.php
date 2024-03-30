<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AsieController extends AbstractController
{
    #[Route('/asie', name: 'asie')]
    public function index(): Response
    {
        return $this->render('asie/index.html.twig', [
            'controller_name' => 'AsieController',
        ]);
    }
}
