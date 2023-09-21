<?php

class Factoria{

    static $marca = ['porche', 'BMW', 'citroen', 'seat'];
    static $modelo= ['familar', 'monovolúmen', 'suv', 'todoterreno'];

    static $color = ['rojo', 'azul', 'verde', 'negro'];

    static function generarMatricula($longitud = 7) {
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $matricula = '';
        $maxCaracteres = strlen($caracteres) - 1;

        for ($i = 0; $i < $longitud; $i++) {
            $indiceAleatorio = rand(0, $maxCaracteres);
            $matricula .= $caracteres[$indiceAleatorio];
        }

        return $matricula;
    }

    static function generaCoche(){
        $c = new Coche(self::$marca[rand(0,count(self::$marca)-1)],
                       self::$modelo[rand(0, count(self::$modelo)-1)],
                       self::$color[rand(0, count(self::$color)-1)],
                       self::generarMatricula());
        return $c;
    }

    static function generaVariosCoches($cuantos){
        $v = [];
        for ($i=0; $i < $cuantos; $i++) {
            $v[] = self::generaCoche();
        }
        return $v;
    }

}
