<?php
require_once 'Aula.php';
require_once 'Ordenador.php';

class Factoria {

    private static $marcas = [];
    private static $modelo = [];
    private static $procesadores = [''];
    private static $memorias = [];
    private static $almacenamiento = [];
    

    /* public static function crearOrdenador($marca, $modelo, $procesador, $ram, $almacenamiento) {
        return new Ordenador($marca, $modelo, $procesador, $ram, $almacenamiento);
    }

    public static function crearAula($nombre, $curso) {
        return new Aula($nombre, $curso);
    } */
}