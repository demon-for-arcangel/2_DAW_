<?php

function sacarCociente($num1, $num2, $resultado){
    do{
        $num1 = $num1 - $num2;
        $resultado++;
    }while($num1 >= $num2);

    return $resultado;
}

function sacarResto($num1, $num2, $resultado){
    do{
        $num1 = $num1 - $num2;
    }while($num1 >= $num2);

    return $resultado = $num1;
}