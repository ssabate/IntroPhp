<?php

namespace App;

use App\Figura;

class Quadrat extends Figura{

    private $costat=10;

    public function calcularArea()
    {
        return $this->costat*$this->costat;
    }


}