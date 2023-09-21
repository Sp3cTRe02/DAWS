<?php
require __DIR__.'/ordenador/Ordenador.php';
require __DIR__.'/aula/Aula.php';
class Factoria{
    static $tipo = ['portatil', 'sobremesa', 'AIO'];
    static $procesador = ['Intel i7', 'Intel duo', 'AMD ryzen7', 'AMD FX8000'];
    static $ram = ['2GB','4GB','8GB','16GB'];
    static $grafica = ['Intel graphics  7', 'Nvidia GTX1660', 'AMD rx5600'];
    static $curso = ['DAW', 'DAM', 'ASIR'];

    static function generaOrdenador(){
        $o =new Ordenador(self::$tipo[rand(0, count(self::$tipo)-1)],
                self::$procesador[rand(0,count(self::$procesador)-1)],
                self::$ram[rand(0,count(self::$ram)-1)],
                self::$grafica[rand(0,count(self::$grafica)-1)],
                rand(128, 1024).'GB');
        return $o;
    }

    static function generaVariosOrdenadores($cuantos){
        $v = [];
        for ($i = 0; $i < $cuantos ; $i++){
            $v[] = self::generaOrdenador();
        }
        return $v;
    }

    static function generaAula($nOrdenador){
        $a = new Aula(rand(1,100), self::$curso[rand(0, count(self::$curso)-1)],
        self::generaVariosOrdenadores($nOrdenador));
        return $a;
    }

    static function generaVariasAulas($cuantos,$nOrdenador){
        $v = [];
        for ($i = 0; $i < $cuantos ; $i++){
            $v[] = self::generaAula($nOrdenador);
        }
        return $v;
    }

}
