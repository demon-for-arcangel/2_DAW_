<?php
class Personaje{
    private $nombre;
    private $edad;
    static $AULA=206;

	public function __construct($nombre, $edad) {
		$this->nombre = $nombre;
		$this->edad = $edad;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function setNombre($value) {
		$this->nombre = $value;
	}

	public function getEdad() {
		return $this->edad;
	}

	public function setEdad($value) {
		$this->edad = $value;
	}

    function __toString()
    {
        return 'Nombre: '.$this->nombre.' Edad: '.$this->edad. ' Aula: '.self::$AULA;
    }

    static function metodoEstatico(){
        return 'Soy un método estático';
    }

    function pasear(){
        return $this->nombre.' paseando';
    }

    function __call($name, $arguments)
    {
        return 'Has llamado a '.$name.' con '.$arguments;
    }
}