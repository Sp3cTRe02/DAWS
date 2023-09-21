<?php
header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];

$argus = explode("/",$paths);
unset($argus[0]);

if (count($argus)>=2) {
    $cod = 404;
    $mes = "Demasiados argumentos";
    header('HTTP/1.1 ' . $cod . ' ' . $mes);
    //c) Enviar la respuesta.
    echo json_encode(['cod' => $cod,
                      'mes' => $mes]);
} else {
    if (empty($argus[1])){
        //Cero argumentos
        $cod = 200;
        $mes = "No hay argumentos";
        header('HTTP/1.1 '.$cod.' '.$mes);
        //c) Enviar la respuesta.
        echo json_encode(['cod' => $cod,
                          'mes' => $mes]);
    } else {
        $num = $argus[1];
        if(comprobarCapicua($num)){
            $cod = 200;
            $mes = "Es capicúa";
        }else {
            $cod = 200;
            $mes = "No es capicúa";
        }
        header('HTTP/1.1 '.$cod.' '.$mes);
        echo json_encode(['cod' => $cod, 'mes' => $mes]);
    }
}

function comprobarCapicua($num){
    $esCapicua = false;
    $Str = (string)$num;
    if($Str == strrev($Str)){
        $esCapicua = true;
    }
    return $esCapicua;
}