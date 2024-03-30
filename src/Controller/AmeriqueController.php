<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AmeriqueController extends AbstractController
{
    #[Route('/amerique', name: 'amerique')]
    public function index(): Response
    {
        return $this->render('amerique/index.html.twig', [
            'controller_name' => 'AmeriqueController',
        ]);
    }
}
