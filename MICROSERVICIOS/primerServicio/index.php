<?php
// a) cabecera indicando devolucion json
header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];

/*echo $requestMethod,'<br>';
echo $paths.'<br>';*/
/*if ($requestMethod == 'GET'){
    $v = [1,2,3,4];
    $cod = 200;
    $mes = "Todo ok";
    header("HTTP/1.1 ".$cod.' '.$mes);
    echo json_encode($v);
}else{
    $cod = 405;
    $mes = "Verbo no soportado";
    header("HTTP/1.1 ".$cod.' '.$mes);
    //c) enviar la respuesta
    echo json_encode(['cod' => $cod,
                      'mes' => $mes]);
};*/


//b) cabecera devolucion peticion
// $cod = 200;
// $mes = "Verbo no soportado";
// header("HTTP/1.1 ".$cod.' '.$mes);

// //c) enviar la respuesta
// echo json_encode($v);