<?php
header("Content-Type:application/json");

require_once __DIR__.'/ordenador/Ordenador.php';
require_once __DIR__.'/aula/Aula.php';

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];

$argus = explode("/",$paths);
unset($argus[0]);

if ($requestMethod == 'GET'){
    if (empty($argus[1])) {
        $cod = 406;
        $mes = "No hay argumentos";
        header('HTTP/1.1 '.$cod.' '.$mes);
        echo json_encode(['cod' => $cod,
            'mes' => $mes]);
    }elseif(count($argus)>=3) {
        $cod = 404;
        $mes = "Demasiados argumentos";
        header('HTTP/1.1 ' . $cod . ' ' . $mes);
        echo json_encode(['cod' => $cod,
            'mes' => $mes]);
    }else{
        $cod = 200;
        $a = [];
        $a = Factoria::generaVariasAulas($argus[1],$argus[2]);
        $mes = "Se han generado ".count($a)." aulas";

        header('HTTP/1.1 '.$cod.' '.$mes);
        echo json_encode(['cod' => $cod, 'mes' => $mes, 'dates' => $a]);
    }
} else{
    $cod = 405;
    $mes = "Verbo no soportado";
    header("HTTP/1.1 ".$cod.' '.$mes);
    echo json_encode(['cod' => $cod,
        'mes' => $mes]);
}