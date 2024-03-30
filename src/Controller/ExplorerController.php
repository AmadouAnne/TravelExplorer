<?php

namespace App\Controller;

use App\Entity\Explorer;
use App\Repository\ExplorerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExplorerController extends AbstractController
{
    #[Route('/explorer', name: 'explorer')]
    public function index(ExplorerRepository $explorerRepository): Response
    {
        // Exemple : récupérer tous les explorers depuis le repository
        $explorers = $explorerRepository->findAll();

        // Faites quelque chose avec les explorers récupérés, comme les passer à une vue Twig

        return $this->render('explorer/index.html.twig', [
            'explorers' => $explorers,
        ]);
    }


}
