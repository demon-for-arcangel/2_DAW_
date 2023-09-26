<?php
require_once 'Perro.php';
require_once 'Gato.php';
require_once 'Elefante.php';

class Parque {
    private $sectores = [];
    private $animales = [];

    public function agregarAnimal(Animal $animal) {
        // Verificar si hay un sector libre y asignarle un animal
        foreach ($this->sectores as $indice => $sector) {
            if (empty($sector)) {
                $this->sectores[$indice] = $animal;
                $this->animales[] = $animal;
                echo $animal->getNombre() . ' ha entrado al sector ' . $indice;
                return;
            }
        }
        echo 'No hay espacio para' . $animal->getNombre() . 'Se va del parque.';
    }

    public function realizarAccionesAleatorias() {
        foreach ($this->animales as $animal) {
            $accionAleatoria = rand(1, 3);
            switch ($accionAleatoria) {
                case 1:
                    $animal->comer();
                    break;
                case 2:
                    $animal->dormir();
                    break;
                case 3:
                    $animal->hacerRuido();
                    break;
            }
        }
    }

    public function moverAnimales() {
        foreach ($this->animales as $animal) {
            $posicionActual = array_search($animal, $this->sectores, true);
            $posiblesPosiciones = [$posicionActual - 1, $posicionActual + 1];
            shuffle($posiblesPosiciones);
            foreach ($posiblesPosiciones as $posicion) {
                if (isset($this->sectores[$posicion]) && empty($this->sectores[$posicion])) {
                    $this->sectores[$posicion] = $animal;
                    unset($this->sectores[$posicionActual]);
                    echo $animal->getNombre() . 'se ha movido de sector ' . $posicionActual . ' a ' .$posicion;
                    break;
                }
            }
        }
    }

    public function sacarAnimal() {
        $animal = $this->animales[array_rand($this->animales)];
        $indiceSector = array_search($animal, $this->sectores, true);
        if (rand(1, 2) === 1) {
            unset($this->sectores[$indiceSector]);
            $this->animales = array_values(array_diff($this->animales, [$animal]));
            echo "{$animal->getNombre()} ha salido del parque.\n";
        } else {
            echo "{$animal->getNombre()} se queda en el parque.\n";
        }
    }

    public function imprimirEstado() {
        echo 'Estado del parque:';
        foreach ($this->sectores as $indice => $sector) {
            if (empty($sector)) {
                echo 'Sector ' . $indice . ': Libre';
            } else {
                echo 'Sector ' . $indice . ': ' . $sector->getNombre() . $sector->getRaza();
            }
        }
    }
}
