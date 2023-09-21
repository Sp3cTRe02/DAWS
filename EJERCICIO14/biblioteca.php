<?php

function iniciarTablero($cant){
    $v = array_fill(0,$cant-1,'-');
    return $v;
}

function colocarMosca(&$v){
    $mosca =  rand(0,count($v)-1);
    $v[$mosca] = 1;
}

/*
    Cuando hagamos una api es bueno
    devolver codigo numerico y explicar cada caso con comentarios
*/
