<?php

namespace App\Controller;


use App\Services\CarServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarController extends AbstractController
{
    /**
     * @Route("/car", name="car")
     */
    public function index(): Response
    {
        return $this->render('car/index.html.twig', [
            'controller_name' => 'CarController',
        ]);
    }
        /**
        *@route("/car/list", name="list_car")
        */

    public function list(CarServices $CarServices)
    {
        $listCar =$CarServices->getlist();
        return $this->render('car/list.html.twig',[
            'controller_name' => 'CarController',
            'listcar'=>$listCar
        ]);
    }
}
