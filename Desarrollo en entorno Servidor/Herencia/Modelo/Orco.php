<?php
require_once 'Personaje.php';

class Orco extends Elfo{
    private $cabreo;

    public function __construct($nombre, $edad, $arquero, $flechas, $cabreo)
    {
        parent::__construct($nombre, $edad, $arquero, $flechas);
        $this -> cabreo = $cabreo;
    }
}