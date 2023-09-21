<?php

header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];
//declaro el rango del vector
$vec = range(1,8);
// elimino la primera posicion de los argumentos
$argus = explode("/",$paths);
unset($argus[0]);
//separo los argumentos y los guardo en un array
//selecciono el primer argumento para seleccionar el numero que quiero consultar
$num = $argus[1];
rellenarVector($vec);

if ($requestMethod == 'GET'){
    if ($num > count($vec)+1 || empty($argus)){ //si el numero que se le pasa por argumento es mayor que la suma del vector lanza error o no tiene argumento
        $cod = 406;
        $mes = "El número es mayor que el rango del array";
        header("HTTP/1.1 ".$cod.' '.$mes);
    }else{
        $cod = 200;
        $mes = "Todo ok";
        header("HTTP/1.1 ".$cod.' '.$mes);
        echo json_encode(contRepetidos($vec, $num));
    }
}else{
    $cod = 405;
    $mes = "Verbo no soportado";
    header("HTTP/1.1 ".$cod.' '.$mes);
    //c) enviar la respuesta
    echo json_encode(['cod' => $cod,
                      'mes' => $mes]);
};




function rellenarVector(&$vect){
    for ($i=0; $i < count($vect); $i++) {
        $v[$i] = rand(1,10);
    }
}
function contRepetidos($v, $n){
    $res = 0;
    foreach ($v as $value){
        if ($value == $n){
            $res ++;
        }
    }
    return $res;
}

