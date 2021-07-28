<?php
namespace App\Services;

use App\Entity\LegendaryCar;


class LegendaryCarServices
{
    private $_listLegendaryCar= [];

    public function __construct()
    {
        $this->addLegendaryCar(new LegendaryCar('Mercedes-Benz 300 SL','Mercedes Benz','sportcar','George Baud le PDG des parfum carven'));
        $this->addLegendaryCar(new LegendaryCar('ford mustang GT 500','Henry Ford','musclecar','la direction du film 60 seconde chronos en posède une'));
        $this->addLegendaryCar(new LegendaryCar('Lamborghini murcielago','Ferruccio Lamborghini','supercar','50 cent en possède un exemplaire'));
        $this->addLegendaryCar(new LegendaryCar('nissan GT-R34','Makoto Uchida','sportcar','brian O coner le personnage qu incarne paul walker en conduisait une'));
        $this->addLegendaryCar(new LegendaryCar('Toyota sprinter trueno ae86','Akio Toyota','sportcar','takumifujitara le Hero d initial D en conduit une'));
    }
    public function getlist()
    {
        return $this->_listLegendaryCar;
    }

    public function addLegendaryCar($pLegendaryCar)
    {
        array_push($this->_listLegendaryCar,$pLegendaryCar);
    }

}