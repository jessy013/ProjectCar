<?php

namespace App\Controller;

use App\Entity\LegendaryCar;
use App\Service\LegendaryCarService;
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
    public function list(LegendaryCarService $LegendaryCarService): Response
    {
        $listLegendaryCar =$LegendaryCarService->getlist();
        return $this->render('legendary/car/list.html.twig',[
            'controller_name'=> 'LegendaryCarController',
            'listLegendaryCar'=>$listLegendaryCar
        ]);
    }
}
