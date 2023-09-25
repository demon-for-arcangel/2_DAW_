<?php 
class Serpiente{
    private $anillas = [];
    private $edad = 0;
    private $viva = true;

    public function __construct($edad = 0){
        if ($edad < 0) {
            $this->viva = false;
        } else {
            $this->edad = $edad;
            $colores = ['r', 'v', 'a'];
            $colorAleatorio = $colores[array_rand($colores)];
            $this->anillas[] = new Anilla($colorAleatorio);
        }
    }

    public function getEdad(){
        return $this -> edad;
    }
}