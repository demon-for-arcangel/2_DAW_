<?php
require_once 'Ordenador.php';
require_once 'Factoria.php';
require_once 'Aula.php';

header('Content-Type: application/json');

$requestMethod = $_SERVER['REQUEST_METHOD'];
$paths = $_SERVER['REQUEST_URI'];

$arguments = explode('/', $paths);
unset($arguments[0]);

$cod = 200;
$mes = '';

/* $ordenador1 = Factoria::crearOrdenador('HP', 'Pavilion', 'Intel i5', '8GB', '1TB SSD');
$ordenador2 = Factoria::crearOrdenador('Dell', 'Inspiron', 'AMD Ryzen 7', '16GB', '512GB SSD'); */

if (count($arguments) >= 2){
    $cod = 400;
    $mes = 'Demasiados argumentos';
}else{
    if (empty($arguments[1])){
        $cod = 400;
        $mes = 'No hay argumentos';
    }else{
        $n = $arguments[1];
    }
}

header('HTTP/1.1 '.$cod.' '.$mes);