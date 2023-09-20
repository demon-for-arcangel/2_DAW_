<?php 
class Aula {
    public $numero;
    public $curso;
    private $ordenadores = [];

	public function __constructor($numero, $curso) {
		$this->numero = $numero;
		$this->curso = $curso;
        $ordenadores = [];
	}

	public function getNombre() {
		return $this->numero;
	}

	public function setNombre($value) {
		$this->numero = $value;
	}

	public function getCurso() {
		return $this->curso;
	}

	public function setCurso($value) {
		$this->curso = $value;
	}

    public function addOrdenador($o){
        $this -> ordenadores[] = $o;
    }
}