<?php


class Cotxe
{
    //Constructor
    public function __construct($marca=null, $model=null){
        if($marca) $this->marca=$marca;
        if($model) $this->model=$model;

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

