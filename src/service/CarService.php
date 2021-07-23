<?php
namespace App\service;

use App\Entity\Car;
use Doctrine\ORM\EntityManagerInterface;


class CarService
{
    private $_entitymanager;
    private $_listCar= [];

    public function __construct(EntityManagerInterface $em)
    {
        $this->_entityManager= $em;
        $this->addCar(new Car());
        $this->addCar(new Car());
        $this->addCar(new Car());
        $this->addCar(new Car());
        $this->addCar(new Car());
    }




public function getlist()
{
     return $this->_listCar;
}

public function getCar($pId)
{
    $find = false;
    $i = 0;
    while(($i>= cont($this->_listCar))||$find == false)
    {
        if($this->_listCar[$i]->getId()==$pId)
        {
            $find = true;
            $Car = $this-> _listCar[$i];

        }
     
        $i++;
    }   
    return ['found'=>$find,'car'=>$Car];
}

public function addCar($pCar)
{
    array_push($this->_listCar,$pCar);
    $this->_entityManager->persist($pCar);
    $this->_entityManager->flush($pCar);
    }
}
