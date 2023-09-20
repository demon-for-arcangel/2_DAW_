<?php

class Ordenador {
    public $marca;
    public $modelo;
    public $procesador;
    public $ram;
    public $almacenamiento;

    public function __construct($marca, $modelo, $procesador, $ram, $almacenamiento) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->procesador = $procesador;
        $this->ram = $ram;
        $this->almacenamiento = $almacenamiento;
    }

    public function __toString()
    {
        
    }
}
