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

    public function simularUnAnio(){
        foreach ($this -> serpientes as $serpiente){
            if ($serpiente -> estaViva()){
                $serpiente -> envejecer();
                $serpiente -> serAtacada();
            }
        }
    }

    public function imprimirEstado(){
        foreach ($this -> serpientes as $index => $serpiente){
            echo "Serpiente $index: Edad: {$serpiente->getEdad()}, Anillas: " . count($serpiente->anillas) . ", Viva: " . ($serpiente->estaViva() ? 'Sí' : 'No') . "\n";        }
    }
}