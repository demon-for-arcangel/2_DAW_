<?php
require_once 'Perro.php';
require_once 'Gato.php';

$perro = new Perro('Max', 'Labrador', 15, 'Dorado');
$gato = new Gato('Luna', 'Siames', 7, 'Blanco');

$perro->vacunar();
$perro->comer();
$perro->dormir();
$perro->hacerRuido();
if ($perro->hacerCaso()) {
    echo $perro->nombre . ' hizo caso.<br>';
} else {
    echo $perro->nombre . ' no hizo caso.<br>';
}
$perro->sacarPaseo();

$gato->vacunar();
$gato->comer();
$gato->dormir();
$gato->hacerRuido();
if ($gato->hacerCaso()) {
    echo $gato->nombre . ' hizo caso.<br>';
} else {
    echo $gato->nombre . ' no hizo caso.<br>';
}
$gato->toserBolaPelo();