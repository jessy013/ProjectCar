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
        $this->addCar(new Car('Mercedes-Benz 300 SL','mercedes benz','sportcar','300 SL de george baud PDG des parfun Carven'));
        $this->addCar(new Car('ford mustange de 1967','Henry Ford','musclecar','ford mustang GT500 eleanor du film 60 second chronos'));
        $this->addCar(new Car('Lamborghini 350 GT','ferruccio Lamborghini','supersport',' le chanteur Gims et le footballeur Rio Mavuba possèdent la Ferrari 458'));
        $this->addCar(new Car('nissan GT-R','Makoto Uchida','supercar','la nissan GT-R r34 du film fast and furious'));
        $this->addCar(new Car('toyota GR supra','Akio Toyota','supercar','la toyota sprinter trueno ae86 du manga initial D'));
    }




public function getlist()
{
     return $this->_listCar;
}

public function getCar($pId)
{
    $find = false;
    $i = 0;
    while(($i>= count($this->_listCar))||$find == false)
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
