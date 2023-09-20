<?php 
//a) Cabecera devolucion de JSON
header('Content-Type:application/json');

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];

/* echo $requestMethod.'<br>';
echo $paths.'<br>'; */
if ($requestMethod == 'GET'){
    $v = [1, 2, 3, 4];
    //b) cabecera devolución petición
    $cod = 200;
    $mes = "Todo Ok";
    header("HTTP/1.1 " .$cod . ' '. $mes);

    //c) Enviar la respuesta
    echo json_encode($v);
} else{
    //b) cabecera devolución petición
    $cod = 405 ;
    $mes = "Verbo no soportado";
    header("HTTP/1.1 " .$cod . ' '. $mes);

    //c) Enviar la respuesta
    echo json_encode(['cod' => $cod,
                    'mes' => $mes]);
}