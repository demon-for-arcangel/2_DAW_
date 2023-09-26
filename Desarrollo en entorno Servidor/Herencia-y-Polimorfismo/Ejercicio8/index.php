<?php
require_once 'Parque.php';

$parque = new Parque();

// Agregar animales al parque
$perro = new Perro('Max', 'Labrador', 15, 'Dorado');
$gato = new Gato('Luna', 'Siames', 7, 'Blanco');
$elefante = new Elefante('Dumbo', 'Africano', 6000, 'Gris');

$parque->agregarAnimal($perro);
$parque->agregarAnimal($gato);
$parque->agregarAnimal($elefante);

// Simular acciones
for ($i = 0; $i < 30; $i++) {
    sleep(2);
    $parque->realizarAccionesAleatorias();
    
    if ($i % 15 === 0) {
        $parque->moverAnimales();
    }

    if ($i % 20 === 0) {
        $parque->sacarAnimal();
    }

    if ($i % 10 === 0) {
        $nuevoAnimal = rand(1, 3);
        switch ($nuevoAnimal) {
            case 1:
                $parque->agregarAnimal(new Perro('Nuevo Perro', 'Raza', 10, 'Blanco'));
                break;
            case 2:
                $parque->agregarAnimal(new Gato('Nuevo Gato', 'Raza', 5, 'Negro'));
                break;
            case 3:
                $parque->agregarAnimal(new Elefante('Nuevo Elefante', 'Africano', 4000, 'Gris'));
                break;
        }
    }

    $parque->imprimirEstado();
}