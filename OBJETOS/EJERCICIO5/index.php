<?php
header("Content-Type:application/json");

require_once 'Conjunto.php';
require_once 'Factoria.php';
require_once 'Logica.php';

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];


$argus = explode("/",$paths);
unset($argus[0]);

if ($requestMethod == 'GET'){
    if (empty($argus[1])) {
        $cod = 406;
        $mes = "No hay argumentos";
    }elseif (count($argus)>=2){
        $cod = 404;
        $mes = "Demasiados argumentos";
    }else{
        if (strtoupper($argus[1])== 'I'){
            $cod = 200;
            $mes = "OK";
            $a = Factoria::generaConjunto();
            $b = Factoria::generaConjunto();
            $intersec = Logica::createIntersec($a->getConjunto(),$b->getConjunto());
            header("HTTP/1.1 ".$cod.' '.$mes);
            echo json_encode(['cod' => $cod,
                'mes' => $mes,
                'a' => $a,
                'b' => $b,
                'intersec' => $intersec]);
        }elseif (strtoupper($argus[1])== 'U'){
            $cod = 200;
            $mes = "OK";
            $a = Factoria::generaConjunto();
            $b = Factoria::generaConjunto();
            $union = Logica::createUnion($a->getConjunto(),$b->getConjunto());
            header("HTTP/1.1 ".$cod.' '.$mes);
            echo json_encode(['cod' => $cod,
                'mes' => $mes,
                'a' => $a,
                'b' => $b,
                'intersec' => $union]);
        }else{
            $cod = 405;
            $mes = "Argumento Invalido";
        }
        header("HTTP/1.1 ".$cod.' '.$mes);
        echo json_encode(['cod' => $cod,
            'mes' => $mes]);
    }
}else{
    $cod = 405;
    $mes = "Verbo no soportado";
    header("HTTP/1.1 ".$cod.' '.$mes);
    echo json_encode(['cod' => $cod,
        'mes' => $mes]);
}