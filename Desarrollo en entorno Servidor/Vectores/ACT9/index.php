<?php
require 'libreria.php';

$paths = $_SERVER['REQUEST_URI'];
$argus = explode("/", $paths);
unset($argus[0]);

if (count($argus) >= 2) {
    echo 'Demasiados argumentos';
} else {
    if (empty($argus[1])) {
        echo 'No hay argumentos';
    } else {
        $numero = $argus[1];

        $esCapicua = comprobarCapicua($numero);

        if ($esCapicua) {
            echo 'El numero '. $numero . ' es capicua';
        } else {
            echo 'El numero '. $numero . ' no es capicua';
        }
    }
}