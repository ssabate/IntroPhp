<?php
namespace App;

abstract class Figura{

    private $coordX=0;
    private $coordY=0;

    public abstract function calcularArea();

}

class Quadrat extends Figura{

    private $costat=10;

    public function calcularArea()
    {
        return $this->costat*$this->costat;
    }


}

$o=new Quadrat();
echo $o->calcularArea();