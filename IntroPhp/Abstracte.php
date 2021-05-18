<?php


//Declaració d'una classe Abstracta --> no permet instanciar objectes
abstract class Abstracta{

    private $propietat=9;

    //Mètode normal (no abstracte)
    public function getPropietat(): int
    {
        return $this->propietat;
    }

    //Mètode abstracte __> mètodes que no tenen implementació, només capçalera/signatura
    protected abstract function metodeAbstracte($param1, $param2);

    protected abstract function calcularArea();


}

class FillaAbstracta extends Abstracta{

    private $costat=0;

    protected function metodeAbstracte($param1, $param2)
    {

        return $param1+$param2;
    }

    public function calcularArea(){
        return $this->costat*$this->costat;
    }
}

//$o=new Abstracta();
$o=new FillaAbstracta();