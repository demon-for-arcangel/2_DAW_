<?php

require_once('Personaje.php');

$p = new Personaje('Javi',17);
$p2 = new Personaje('Juan', 107);
echo $p.'<br>';

$p->setNombre('Inés');
echo $p.'<br>';

echo 'La persona: '.$p->getNombre().' tiene '.$p->getEdad().' años<br>';

echo 'Aula de los personajes: '.Personaje::$AULA.'<br>';
echo Personaje::metodoEstatico();

echo $p -> pasear().'<br>';
echo $p2 -> pasear().'<br>';

echo $p -> pelear().'<br>'; //Método que no existe aún