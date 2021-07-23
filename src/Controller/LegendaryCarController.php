<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegendaryCarController extends AbstractController
{
    /**
     * @Route("/legendary/car", name="legendary_car")
     */
    public function index(): Response
    {
        return $this->render('legendary_car/index.html.twig', [
            'controller_name' => 'LegendaryCarController',
        ]);
    }
}
