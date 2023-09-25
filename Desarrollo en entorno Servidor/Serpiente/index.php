<?php

require_once 'Serpiente.php'; 
require_once 'Anilla.php';
require_once 'Nido.php';

header('Content-Type:application/json');

$requestMethod = $_SERVER['REQUEST_METHOD'];
$paths = $_SERVER['REQUEST_URI'];

$argus = explode('/',$paths);
unset($argus[0]);

if (count($argus) == 2){
    $cantidad = $argus[1];
    $edad = $argus[2];

    $nido = new Nido();

    for ($i = 0; $i < $cantidad; $i++) {
        $serpiente = new Serpiente($edad);
        $nido->agregarSerpiente($serpiente);
    }

    $cod = 200;
    $mes = 'Nido y serpientes creadas';
    header('HTTP/1.1 ' . $cod . ' ' . $mes);

    echo json_encode(['Cantidad de serpientes en el nido: ' . $nido -> cantidadSerpientes(),
                    ' Edad: ' . $serpiente -> getEdad()]);
}else{
    if (count($argus) == 1 ){
        $edad = $argus[1];
        $serpiente = new Serpiente($edad);

        $cod = 200;
        $mes = 'Serpiente creada';
        header('HTTP/1.1 ' . $cod . ' ' . $mes);

        echo json_encode('Edad de la serpiente: ' . $serpiente -> getEdad());
    }else{
        $cod = 400;
        $mes = 'No es valido ese numero de argumentos';
        header('HTTP/1.1 ' . $cod . ' ' . $mes);

        echo json_encode(['cod = ' . $cod,
                        'mes = ' . $mes]);
    }
}