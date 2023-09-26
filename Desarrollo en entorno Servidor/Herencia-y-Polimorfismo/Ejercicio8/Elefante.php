<?php
require_once 'Animal.php';

class Elefante extends Animal {
    public function comer() {
        echo $this->nombre . ' está comiendo.<br>';
    }

    public function dormir() {
        echo $this->nombre . ' está durmiendo.<br>';
    }

    public function hacerRuido() {
        echo $this->nombre . ' barrita<br>';
    }
}
