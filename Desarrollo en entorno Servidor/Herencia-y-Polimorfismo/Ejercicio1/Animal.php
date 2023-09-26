<?php

class Animal {
    public $nombre;
    protected $raza;
    protected $peso;
    protected $color;

    public function __construct($nombre, $raza, $peso, $color) {
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->peso = $peso;
        $this->color = $color;
    }

    public function vacunar() {
        echo $this->nombre . ' ha sido vacunado.<br>';
    }

    public function comer() {
        echo $this->nombre . ' está comiendo.<br>';
    }

    public function dormir() {
        echo $this->nombre . ' está durmiendo.';
    }

    public function hacerRuido() {
        // Este método será sobreescrito en las subclases
    }

    public function hacerCaso() {
        return true; // Este método será sobreescrito en las subclases
    }
}
