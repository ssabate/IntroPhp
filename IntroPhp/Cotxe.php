<?php


class Cotxe
{
    //Propietat estàtica <-- no s'ha de posar!!!!!
    public static $propEstatica=7;


    //Constructor
    public function __construct($marca=null, $model=null){
        if($marca) $this->marca=$marca;
        if($model) $this->model=$model;

    }

    //Destructor
    public function __destruct(){
        //echo "S'ha destruit el cotxe ".$this->marca." ".$this->model;
    }

    //Propietats
    //private
    // --> no fiquem res (package private) --> no existeix en PHP!!
    //protected
    //public
    public $marca='Nissan';
    public $model="Terrano II";
    public $unitatsVenudes=0;
    public $nacional=true;
    //Declarem una propietat sense valor per defecte
    private $preuCost=0.0;

    //Declaro una propietat que tindrà els possibles valors limitats
    private $tipo="gasolina";


    //Declaro una propietat array
    public $colors=array("blau","roig");

    //Declaro una propietat array associatiu
    public $valorMarques=array("Mercedes" => "100" , "Skoda"=>"20");


    /**
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $permesos = array("gasolina", "diesel", "hibrid", "electric");

        if(in_array($tipo,$permesos)){
            $this->tipo = $tipo;
        } else $this->tipo="sense especificar";
    }


    /**
     * @return float
     */
    public function getPreuCost()
    {
        return $this->preuCost;
    }

    /**
     * @param float $preuCost
     */
    public function setPreuCost($preuCost)
    {
        return $this->preuCost = $preuCost;
    }

//    /**
//     * @return mixed
//     */
//    public function getPreuCost()
//    {
//        return $this->preuCost;
//    }
//
//    /**
//     * @param mixed $preuCost
//     */
//    public function setPreuCost($preuCost)
//    {
//        $this->preuCost = $preuCost;
//    }


    function modificarPreuCost($preuCost){
        $this->preuCost += $preuCost;
    }


    //Mètodes
    //Igual que un getter
    public function mostrarInfo()
    {
        return $this->model;
    }

    //Igual que un setter
    public function canviarModel($string)
    {
        $this->model = $string;
        //Retornem el propi objecte
        return $this;
    }

    public function calcularDesgast(){

        return $this->preuCost * Utilitat::$desgast;

    }


    /*
     * Comentari
     * multilinia
     *
     * */
}

//Codi del programa
echo "Bon dia!!";
echo "<br />";

//Instanciem un primer cotxe
$terrano = new Cotxe();

//Mostrem les propietats
echo $terrano ->marca;
echo "<br />";
echo $terrano ->model;
echo "<br />";
echo $terrano ->unitatsVenudes;
echo "<br />";
echo $terrano ->nacional;
echo "<br />";

//Instanciem un primer cotxe
$rav4 = new Cotxe();

//Modifiquem les propietats
$rav4->marca = "Toyota";
$rav4->canviarModel("Rav4 Hybrid");

//Mostrem les propietats
echo $rav4 ->marca;
echo "<br />";
echo $rav4 ->mostrarInfo();
echo "<br />";
echo $rav4 ->unitatsVenudes;
echo "<br />";
echo $rav4 ->nacional;
echo "<br />";

//Instanció un cotxe
$samurai = new Cotxe();
echo $samurai->canviarModel("Samurai")->mostrarInfo();

//Instanció un cotxe
$impreza= new Cotxe(null,"Impreza");
$impreza= new Cotxe("Subaru", null);

$impreza->setPreuCost(23);
$impreza->modificarPreuCost(300.5);
echo "<br />";
echo $impreza ->getPreuCost();

$impreza->setTipo("a pedals");
echo "<br />";
echo $impreza ->getTipo();

$impreza->setTipo("electric");
echo "<br />";
echo $impreza ->getTipo();

echo "<br />";
echo $impreza ->marca;
echo $impreza ->model;

echo "<br />";
echo "<br />";
echo Cotxe::$propEstatica;
echo "<br />";
echo $impreza::$propEstatica;
echo "<br />";
$impreza::$propEstatica=99;
echo "<br />";
echo Cotxe::$propEstatica;
echo "<br />";
echo $impreza::$propEstatica;
echo "<br />";
echo $samurai::$propEstatica;
echo "<br />";

echo $samurai->colors[0];
echo "<br />";
echo $samurai->colors[1];
echo "<br />";
echo $samurai->colors[13];

$i=0;
while($i< count($samurai->colors)){
    echo "<br />";
    echo $samurai->colors[$i];
    $i++;
}

echo "<br />";


//Tipo de bucle nou --> foreach
foreach($samurai->colors as $color){
    $color="verd";
    echo "<br />";
    echo $color;

}

for($i=0; $i< count($samurai->colors); $i++){
    echo "<br />";
    echo $samurai->colors[$i];
}

echo "<br />";
print_r($samurai->colors);

array_push($samurai->colors,"verd", "gris");

echo "<br />";
print_r(array_chunk($samurai->colors,2));

echo "<br />";
print_r($samurai->colors);

array_pop($samurai->colors);

echo "<br />";
print_r($samurai->colors);

echo "<br />";
echo $samurai->valorMarques["Mercedes"];





