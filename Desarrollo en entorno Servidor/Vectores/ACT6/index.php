<?php
include 'libreria.php';

header("Content-Type: application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];

$argus = explode("/", $paths);
unset($argus[0]); //para obtener el numero pasado como argumento en la URL nos elimina la posición 0

$cod = 200; // Establece el código de respuesta por defecto
$mes = ''; // Establece el mensaje por defecto

if (count($argus) >= 2) {
    $cod = 404;
    $mes = "Demasiados argumentos";
} else {
    if (empty($argus[1])) {
        $cod = 404;
        $mes = "No hay argumentos";
    } else {
        $n = $argus[1]; // Obtener el argumento pasado en la URL

        $tamanio = 10;
        $numeros = rellenarVector($tamanio); 

        if (vecesRepetidas($numeros, $n) > 0) {
            $mes = "El numero $n esta en la lista.";
        } else {
            $cod = 404;
            $mes = "El numero $n no esta en la lista.";
        }
    }
}

header('HTTP/1.1 ' . $cod . ' ' . $mes);
echo json_encode(['cod' => $cod, 'mes' => $mes]); //solo un json_encode por cada bloque