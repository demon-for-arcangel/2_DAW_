<?php
require_once 'Animal.php';

class Perro extends Animal {
    public function comer() {
        echo "{$this->nombre} está comiendo.\n";
    }

    public function dormir() {
        echo "{$this->nombre} está durmiendo.\n";
    }

    public function hacerRuido() {
        echo "{$this->nombre} ladra: ¡Guau! ¡Guau!\n";
    }
}
