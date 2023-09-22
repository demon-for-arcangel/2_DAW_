<?php

require_once 'Serpiente.php'; 
require_once 'Anilla.php';
require_once 'Nido.php';

$nido = new Nido();

for ($i = 0; $i < 5; $i++) {
    $serpiente = new Serpiente();
    $nido->agregarSerpiente($serpiente);
}

for ($i = 0; $i < 10; $i++) {
    $nido->simularUnAnio();
}

$nido->imprimirEstado();