<?php
require_once 'Perro.php';
require_once 'Gato.php';

$perro = new Perro("Max", "Labrador", 15, "Dorado");
$gato = new Gato("Luna", "Siames", 7, "Blanco");

$perro->vacunar();
$perro->comer();
$perro->dormir();
$perro->hacerRuido();
if ($perro->hacerCaso()) {
    echo "{$perro->nombre} hizo caso.\n";
} else {
    echo "{$perro->nombre} no hizo caso.\n";
}
$perro->sacarPaseo();

$gato->vacunar();
$gato->comer();
$gato->dormir();
$gato->hacerRuido();
if ($gato->hacerCaso()) {
    echo "{$gato->nombre} hizo caso.\n";
} else {
    echo "{$gato->nombre} no hizo caso.\n";
}
$gato->toserBolaPelo();