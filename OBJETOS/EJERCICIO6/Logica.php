<?php

class Logica{

    public static function pasarAniosSerpiente($cuantos){
        $serpiente = Factoria::crearSerpiente();
        $anillas = $serpiente->getAnillas();
        $aniosVividos = 0;
        while($aniosVividos < $cuantos){
            $ataqueMangosta = rand(0,10);
            if ($ataqueMangosta == 1) {
                $serpiente->morir();
            }else{
                if(sizeof($anillas) < 10){
                    $probabilidad = rand(0,10);
                    if($probabilidad < 8){
                        $serpiente->aniadeAnilla();
                    }else{
                        $serpiente->mudar();
                    }
                }else {
                    $probabilidad = rand(0,10);
                    if($probabilidad < 9){
                        $serpiente->quitarAnilla();
                    }else{
                        $serpiente->mudar();
                    }
                }
            }
            $aniosVividos++;
        }
        return $serpiente;
    }
    public static function pasarAniosNido($nSerpientes, $anios){
        $serpientes = Factoria::crearVariasSerientes($nSerpientes);
        $aniosVividos = 0;
        while($aniosVividos < $anios){
            $ataqueMangosta = rand(0,10);
            if ($ataqueMangosta == 1) {
                $serpientes[rand(0,count($serpientes)-1)]->morir();
            }else{
                foreach ($serpientes as $serpiente) {
                    $anillas = $serpiente->getAnillas();
                    if(sizeof($anillas) < 10){
                        $probabilidad = rand(0,10);
                        if($probabilidad < 8){
                            $serpiente->aniadeAnilla();
                        }else{
                            $serpiente->mudar();
                        }
                    }else {
                        $probabilidad = rand(0,10);
                        if($probabilidad < 9){
                            $serpiente->quitarAnilla();
                        }else{
                            $serpiente->mudar();
                        }
                    }
                }
            }
            $aniosVividos++;
        }
        return $serpientes;
    }
}
