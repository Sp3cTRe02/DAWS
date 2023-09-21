<?php

class Factoria{
    public static function generaConjunto($cant = 4){
        $c = new Conjunto();
        for ($i=0; $i < $cant; $i++) {
            $c->addNumber(rand(0,9));
        }
        return $c;
    }


}
