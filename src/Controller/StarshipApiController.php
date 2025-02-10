<?php

namespace App\Controller;

use App\Model\Starship;
use App\Repository\StarshipRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/starships/')]
class StarshipApiController extends AbstractController
{
    #[Route('', methods:['GET','POST'])]
    public function getCollection( StarshipRepository $repository): Response
    {
        
        $starships = $repository->findAll();

        return $this->json($starships);
    }

    #[Route('/{id<\d+>}', methods:['GET','POST'])]
    public function get(StarshipRepository $repository, int $id){
        $starships = $repository->findAll();
        return $this->json($starships[$id]);
    }

   
}
