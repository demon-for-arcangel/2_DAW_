<?php
require_once 'libreria.php';

$num1 = rand(1, 30);
$num2 = rand(1, 10);
$cociente = 0;
$resto = 0;

echo 'Cociente: '.sacarCociente($num1, $num2, $cociente).'<br>';
echo 'Resto: '.sacarResto($num1, $num2, $resto).'<br>';