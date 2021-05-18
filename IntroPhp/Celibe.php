<?php


final class Celibe
{
    //TODO
    public function fesAlgo(): int
    {
        return 5;
    }
}

class FillaCelibe {//extends Celibe{
    //Exemple de declaració d'una constant en Java, no permès en php
    //public static final int $NUMERO=56;

    private $propietat=89;

    public function getPropietat(): int
    {
        return $this->propietat;
    }

    public function diguesAlgo()
    {
        echo "Estic dient algo des de la classe FillaCelibe....<br />";
    }

    public final function noHoToques(){
        echo "Estic fent algo que no ho podeu canviar...<br />";
    }

}

class NetaCelibe extends FillaCelibe{

    //sobreescriptura d'un mètode (polimorfisme)
    public function diguesAlgo(){
        echo "Estic dient algo des de la classe NetaCelibe....<br />";
    }

    //No el podem sobreescriure per què és final
//    public function noHoToques(){
//
//    }

}

$o=new FillaCelibe();
$o->diguesAlgo();
$o->noHoToques();

$o=new NetaCelibe();
$o->diguesAlgo();
$o->noHoToques();