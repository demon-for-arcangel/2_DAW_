<?php

class Factoria{

    static function generarConjunto(){
        $c = new Conjunto();
        for ($i = 0; $i < $cuantos - 1; $i++){
            $c -> addValor(rand(1, 9));
        }
        return $c;
    }
}