<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PraliChocoController extends AbstractController
{
    #[Route('groupe/agroway/cat/pralichoco', name: 'app_pralichocco')]
    public function index(): Response
    {
        return $this->render('prali_choco/index.html.twig', [
            'controller_name' => 'PraliChocoController',
        ]);
    }
}
