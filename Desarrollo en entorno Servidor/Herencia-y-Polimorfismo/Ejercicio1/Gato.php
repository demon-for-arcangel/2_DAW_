<?php
require_once 'Animal.php';

class Gato extends Animal {
    public function hacerRuido() {
        echo $this->nombre . ' maulla: ¡Miau! ¡Miau!';
    }

    public function hacerCaso() {
        return rand(1, 20) == 1; // Devuelve true el 5% de las veces
    }

    public function toserBolaPelo() {
        echo $this->nombre . ' está tosiendo una bola de pelo.';
    }
}
