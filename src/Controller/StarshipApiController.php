<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships/{id<\d+>}', methods:['GET','POST'])]
    public function getCollection(LoggerInterface $logger, StarshipRepository $repository, int $id = 0): Response
    {
        dd($id);
        $starships = $repository->findAll();

        return $this->json($starships);
    }
}
