<?php
require_once('Personaje.php');

$p = new Personaje('Javi',17);
echo $p.'<br>';
$p->setNombre('Ines');
echo $p.'<br>';
echo 'La persona: '.$p->getNombre().' tiene '.$p->getEdad().' años<br>';