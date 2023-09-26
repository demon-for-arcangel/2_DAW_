<?php

$mat = [
    [1, 2, 3],
    [4, 5, 6],
    12
];
echo $mat[0][1];
$mat [1][1] = "Cambiado";
echo $mat[2];
echo $mat[1][1];
unset($mat[0]);
$mat[0] = "Otra cosa"; //al estar unset lo pone al final

foreach ($variable as $value){
    if (is_array($value)){
        foreach($value as $v2){
            echo $v2;
        }
    }else{
        echo $value;
    }
    echo '<br>';
}