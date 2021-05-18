<?php

class Utilitat{

    //Constant de desgast dels cotxes
    public static $desgast=3.45;

    public static function modDesgast($desgast){
        self::$desgast+=$desgast;

    }

}

Utilitat::modDesgast(0.20);
echo Utilitat::$desgast;

