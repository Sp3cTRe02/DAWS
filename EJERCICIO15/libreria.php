<?php

function dividir($val1, $val2){
   $cociente = 0;
   $resto = 0;

   while( $val2 >= $val1){
     $val1 -= $val2;
     $cociente ++;
   }
   return $cociente;
}