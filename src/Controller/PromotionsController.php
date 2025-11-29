<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PromotionsController extends AbstractController
{
    #[Route('/agroway/promotions', name: 'app_promotions')]
    public function index(): Response
    {
        return $this->render('promotions/index.html.twig', [
            'controller_name' => 'PromotionsController',
        ]);
    }
}
