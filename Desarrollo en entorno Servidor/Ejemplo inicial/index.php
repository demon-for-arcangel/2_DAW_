<?php
require 'libreria.php';
require_once 'libreria.php'; //la incluye una vez 
include_once 'libreria.php';
include 'libreria.php'; //no es obligatorio incluir la libreria

$variable = 12; //puede ponerse la misma variable varias veces cambiando los valores
//$variable = true; --> devuelve 1 al hacer un echo
//$variable = 'ahskajhkd'
//$variable = 7.8;

echo gettype($variable); //nos dice de que tipo es la variable, sale un warning si es una variable que no hayamos definido antes
echo $variable;
$i=0;
$i++;
if ($i!=10){

}while($i>0){
    echo '*'.'<br>';//el punto nos sirve para concatenar
    $i--;
}

for($i=0; $i<10; $i++){
    echo $i.'<br>';
}
echo loquesea(12);