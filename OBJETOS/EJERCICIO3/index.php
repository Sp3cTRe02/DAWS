<?php
header("Content-Type:application/json");


require_once ('Coche.php');
require_once ('Factoria.php');

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
    } elseif(count($argus)>=2) {
        $cod = 404;
        $mes = "Demasiados argumentos";
        header('HTTP/1.1 ' . $cod . ' ' . $mes);
        echo json_encode(['cod' => $cod,
            'mes' => $mes]);
    } else {
        $cod = 200;
        $mes = "OK";
        $c = [];
            $c = Factoria::generaVariosCoches($argus[1]);
            $mes = "Se han generado ".count($c)." coches";
           /* print_r($c);*/
        header('HTTP/1.1 '.$cod.' '.$mes);
        echo json_encode(['cod' => $cod, 'mes' => $mes, 'car' => $c]);}
}    else{
    $cod = 405;
    $mes = "Verbo no soportado";
    header("HTTP/1.1 ".$cod.' '.$mes);
    echo json_encode(['cod' => $cod,
                      'mes' => $mes]);
    }



