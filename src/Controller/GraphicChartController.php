<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GraphicChartController extends AbstractController
{
    #[Route('/graphic/chart', name: 'app_graphic_chart')]
    public function index(): Response
    {
        return $this->render('graphic_chart/index.html.twig', [
            'controller_name' => 'GraphicChartController',
        ]);
    }
}
