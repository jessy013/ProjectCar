<?php

namespace App\Controller;


use App\Services\LegendaryCarServices;
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
    /** 
     * @route("/legendary/car/list", "name=list_legendary_car")
     */
    public function list(LegendaryCarServices $LegendaryCarServices): Response
    {
        $listLegendaryCar =$LegendaryCarServices->getlist();
        return $this->render('legendary/car/list.html.twig',[
            'controller_name'=> 'LegendaryCarController',
            'listLegendaryCar'=>$listLegendaryCar
        ]);
    }
}
