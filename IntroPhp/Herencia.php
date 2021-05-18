<?php


class SuperClasse
{
    public $publicS=10;
    protected $protectedS=20;
    private $privateS;

    public function __construct(){
        echo "Hola des de la Superclasse <br />";
    }

    public function metodeSuperclasse(){
        echo "Hola des del metodeSuperclasse de la Superclasse <br />";
    }

}

class SubClasse extends SuperClasse{

    public function __construct(){
        //Primer executa el constructor de la superclasse
        parent::__construct();   //en JAVA fariem super();

        //A continuació fes el que vulgues al constructor del fill
        echo "Hola des de la Subclasse <br />";
    }


    public function provaHerencia(){
        $this->protectedS=7;
        $this->publicS=78;
    }

    //Php no permet la sobrecàrrega de mètodes, JAVA sí
//    public function provaHerencia($iuiuui){
//        $this->protectedS=7;
//        $this->publicS=78;
//    }

    //Sobreescrivim el mètode la superclasse
    public function metodeSuperclasse(){
        parent::metodeSuperclasse();
        echo "Hola des del metodeSuperclasse de la Subclasse <br />";
    }

    public function __tostring(){
        return $this->publicS."-".$this->protectedS;
    }
}

$sub=new Subclasse();

$sub->metodeSuperclasse();

print $sub->__tostring();