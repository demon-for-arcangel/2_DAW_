<?php
require_once 'Animal.php';

class Perro extends Animal {
    public function hacerRuido() {
        echo $this->nombre . ' ladra';
    }

    public function hacerCaso() {
        return rand(1, 10) <= 9; // Devuelve true el 90% de las veces
    }

    public function sacarPaseo() {
        echo $this->nombre . ' está paseando.';
    }
}