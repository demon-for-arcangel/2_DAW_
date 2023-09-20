<?php
require 'libreria.php';

$horas = rand(0, 23);
$minutos = rand(0, 60);
$segundos = rand(0, 60);

echo "Hora después de incrementar un segundo: ";
echo incrementarSegundo($horas, $minutos, $segundos);
