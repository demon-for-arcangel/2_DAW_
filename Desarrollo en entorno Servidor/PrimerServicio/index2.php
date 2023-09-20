<?php 
//a) Cabecera devolución JSON.
header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];
// echo($paths);
$argus = explode("/",$paths);
unset($argus[0]);
// print_r($argus);
// echo 'Has pasado '.count($argus).' argumentos <br>';
if (count($argus)>=2){
    $cod = 404;
    $mes = "Demasiados argumentos";
    header('HTTP/1.1 '.$cod.' '.$mes);
    //c) Enviar la respuesta.
    echo json_encode(['cod' => $cod,
                        'mes' => $mes]);
} else {
    if (empty($argus[1])){
        //Cero argumentos
        $v =   ['1A' => 1,
                '2B' => 2,
                3,
                4];
        $cod = 200;
        $mes = "Todo ok";
        header('HTTP/1.1 '.$cod.' '.$mes);
        //c) Enviar la respuesta.
        echo json_encode($v);
    } else {
        //Un argumento
        $v =   [];
        for ($i=0; $i < $argus[1]; $i++) { 
            $v[] = rand(1,100);
        }
        $cod = 200;
        $mes = "Todo ok";
        header('HTTP/1.1 '.$cod.' '.$mes);
        //c) Enviar la respuesta.
        echo json_encode($v);
    }
}


// echo $requestMethod.'<br>';
// echo $paths.'<br>';
// if ($requestMethod == 'GET'){
//     $v = ['1A' => 1,
//           '2B' => 2,
//            3,
//            4];
//     $cod = 200;
//     $mes = "Todo ok";
//     header('HTTP/1.1 '.$cod.' '.$mes);
//     //c) Enviar la respuesta.
//     echo json_encode($v);
// }
// else {
//     //b) Cabecera devolución petición.
//     $cod = 405;
//     $mes = "Verbo no soportado";
//     header('HTTP/1.1 '.$cod.' '.$mes);
//     //c) Enviar la respuesta.
//     echo json_encode(['cod' => $cod,
//                       'mes' => $mes]);
// }


