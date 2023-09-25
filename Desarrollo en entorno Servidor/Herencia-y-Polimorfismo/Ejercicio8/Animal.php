<?php

abstract class Animal {
    protected $nombre;
    protected $raza;
    protected $peso;
    protected $color;

    public function __construct($nombre, $raza, $peso, $color) {
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->peso = $peso;
        $this->color = $color;
    }

    abstract public function comer();

    abstract public function dormir();

    abstract public function hacerRuido();

    public function getNombre() {
        return $this->nombre;
    }
}
