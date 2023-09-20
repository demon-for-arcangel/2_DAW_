<?php

function rellenarVector($tamanio) {
    $v = [];
    for ($i = 0; $i < $tamanio; $i++) {
        $v[] = rand(1, 5);
    }
    return $v;
}

function vecesRepetidas($v, $n) {
    $resultado = 0;
    foreach ($v as $value) {
        if ($value == $n) {
            $resultado++;
        }
    }
    return $resultado;
}
