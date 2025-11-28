<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LaddoController extends AbstractController
{
    #[Route('/laddo', name: 'app_laddo')]
    public function index(): Response
    {
        return $this->render('laddo/index.html.twig', [
            'controller_name' => 'LaddoController',
        ]);
    }
}
