<?php 
class Anilla{
    public $color;

	public function __construct($color) {
		$this->color = $color;
	}

	public function getColor() {
		return $this->color;
	}

	public function setColor($value) {
		$this->color = $value;
	}
}