<?php

class  Logica{

    public static function createIntersec($a, $b){
        $c = new Conjunto();
        $c->setConjunto(array_intersect($a, $b)); 
        // foreach ($intersec as $key => $value) {
        //     $c->addNumber($value);
        // }
        return $c;
    }
    public static function createUnion($a, $b){
        $c = new Conjunto();
        $c->setConjunto(array_merge($a, $b)); 
        // foreach ($union as $key => $value) {
        //     $c->addNumber($value);
        // }
        return $c;
    }
}
