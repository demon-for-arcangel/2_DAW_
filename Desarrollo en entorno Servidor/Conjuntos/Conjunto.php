<?php 

class Conjunto {
    private $elementos = array();

    public function agregarElemento($elemento) {
        $this->elementos[] = $elemento;
    }

    public function eliminarElemento($elemento) {
        $index = array_search($elemento, $this->elementos);
        if ($index !== false) {
            unset($this->elementos[$index]);
        }
    }

    public function interseccion($otroConjunto) {
        $resultado = new Conjunto();
        $resultado->elementos = array_intersect($this->elementos, $otroConjunto->elementos);
        return $resultado;
    }

    public function union($otroConjunto) {
        $resultado = new Conjunto();
        $resultado->elementos = array_unique(array_merge($this->elementos, $otroConjunto->elementos));
        return $resultado;
    }

    public function getElementos() {
        return $this->elementos;
    }
}
