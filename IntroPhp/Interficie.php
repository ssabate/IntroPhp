<?php
//include ("Geometria.php");
namespace App;

use App\Quadrat as Quadrat;

interface Interficie {

    //No admeten propietats
    //$private $nom;

    //Sí s'admeten valors CONSTANTS
    const CONSTANT=23;

    //Sí s'admeten capçaleres/signatures de mètodes
    function metode($param):int;
}

interface Comparable{

    function compareTo($object);

}

class ProvaInterficie implements Interficie, Comparable{

    private $valor=0;

    public function __construct($valor=null){
        if($valor)
            $this->valor=$valor;

    }
    /**
     * @param $param
     * @return int
     */
    function metode($param): int
    {
        // TODO: Implement metode() method.
        return $this->valor + Interficie::CONSTANT;
    }

    /**
     * @param $object
     * @return mixed
     */
    function compareTo($object)
    {
        // TODO: Implement compareTo() method.
        if($this->valor === $object->valor) return 0;
        if($this->valor > $object->valor) return 1;
        return -1;
    }
}

$obj1=new ProvaInterficie(10);

$obj2=new ProvaInterficie(10);

//Vaig a comparar els 2 objectes
if($obj1->compareTo($obj2)==0) echo "Són iguals <br />";
else if($obj1->compareTo($obj2)==1) echo "El primer objecte és major que el segon<br />";
else echo "El primer objecte és menor que el segon <br />";

$res=$obj1->compareTo(new Quadrat());
if($res==0) echo "Són iguals <br />";
else if($res==1) echo "El primer objecte és major que el segon<br />";
else echo "El primer objecte és menor que el segon <br />";