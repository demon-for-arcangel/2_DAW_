<?php 
require_once 'Serpiente.php';

class Nido{
    private $serpientes = [];

    public function agregarSerpiente(Serpiente $serpiente){
        if (count($this -> serpientes) < 20){
            $this -> serpientes[] = $serpiente;
        }
    }

    public function cantidadSerpientes() {
        return count($this->serpientes);
    }    
}