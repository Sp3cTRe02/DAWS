<?php

$vec = range(1,100);


rellenarVector($vec);
print_r($vec);


function rellenarVector(&$vect){
    for ($i=0; $i < count($vect); $i++) { 
            $v[$i] = rand(1,100);
    }
}
function contRepetidos($v, $n){
    $res = 0;
    foreach ($v as $value){
        if ($value == $n){
            $res ++;
        }
    }
    return $res
}