<?php
include 'Conjunto.php';
// para eliminar un argumento añadiremos un guión delante del argumento '-'
// al añadir o elimar lo haremos aleatoriamente

header("Content-Type:application/json");

//Creación de los conjuntos
$A = new Conjunto();
$B = new Conjunto();

// Agregar 5 elementos aleatorios (números o letras) a cada conjunto
for ($i = 0; $i < 5; $i++) {
    $letras = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    $elementoA = rand(1, 100); // Generar un número aleatorio entre 1 y 100 para A
    $A->agregarElemento($elementoA);
    $elementoB = rand(1, 100); // Generar un número aleatorio entre 1 y 100 para B
    $B->agregarElemento($elementoB);

    //$letra = chr(rand(65, 90)); // Generar una letra aleatoria (mayúscula) Usando el código ASCII
    $letra = $letras[array_rand($letras)];
    $A->agregarElemento($letra);
    //$letra = chr(rand(65, 90));
    $letra = $letras[array_rand($letras)];
    $B->agregarElemento($letra);
}

echo "Conjunto A: " . json_encode($A->getElementos()) . "\n";
echo "Conjunto B: " . json_encode($B->getElementos()) . "\n";

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];

$argus = explode("/",$paths);
unset($argus[0]);

if (count($argus)>=2){
    $cod = 404;
    $mes = "Demasiados argumentos";
    header('HTTP/1.1 '.$cod.' '.$mes);
    
    echo json_encode(['cod' => $cod,
                        'mes' => $mes]);
} else {
    if (empty($argus[1])){
        $cod = 200;
        $mes = "Todo ok";
        header('HTTP/1.1 '.$cod.' '.$mes);      
    } else {
        $operacion = strtoupper($argus[1]); //convertiremos lo introducido en mayúsculas

        if ($operacion === 'I'){
            $resultado = $A -> interseccion($B) -> getElementos();
            $cod = 200;
            $mes = 'Intersección realizada';
            header('HTTP/1.1 '.$cod.' '. $mes);

            echo json_encode($resultado);
        }else if($operacion === 'U'){
            $resultado = $A -> union($B) -> getElementos();
            $cod = 200;
            $mes = 'Unión realizada';
            header('HTTP/1.1 '.$cod.' '.$mes);

            echo json_encode($resultado);
        }else{
             // Verificar si se quiere eliminar un elemento
             if (substr($argus[1], 0, 1) === '-') {
                $elemento = substr($argus[1], 1); // Obtener el elemento sin el guion

                // Eliminar de manera aleatoria
                $randomSet = rand(0, 1);

                if ($randomSet == 0) {
                    $A->eliminarElemento($elemento);
                    $v = $A->getElementos();
                    $mes = "Elemento eliminado del conjunto A";
                } else {
                    $B->eliminarElemento($elemento);
                    $v = $B->getElementos();
                    $mes = "Elemento eliminado del conjunto B";
                }

                $cod = 200;
                header('HTTP/1.1 '.$cod.' '.$mes);
                
                echo json_encode($v);
            } else {
                // Añadir aleatoriamente al conjunto A o B
                $random = rand(0, 1);
                if ($random == 0) {
                    $A->agregarElemento($argus[1]);
                    $v = $A->getElementos();
                    $mes = "Elemento añadido al conjunto A";
                } else {
                    $B->agregarElemento($argus[1]);
                    $v = $B->getElementos();
                    $mes = "Elemento añadido al conjunto B";
                }
                $cod = 200;
                header('HTTP/1.1 '.$cod.' '.$mes);
                
                echo json_encode($v);
            }
        }
    }
}