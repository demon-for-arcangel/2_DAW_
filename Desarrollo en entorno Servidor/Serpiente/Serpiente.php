<?php 
class Serpiente{
    private $anillas = [];
    private $edad = 0;
    private $viva = true;

    public function __construct(){
        $colores = ['r', 'v', 'a'];
        $colorAleatorio = $colores[array_rand($colores)];
        $this -> anillas[] = new Anilla($colorAleatorio);
    }

    public function getEdad(){
        return $this -> edad;
    }

    public function estaViva(){
        return $this -> viva;
    }

    public function crecer(){
        $colores = ['r', 'v', 'a'];
        $colorAleatorio = $colores[array_rand($colores)];
        $this -> anillas[] = new Anilla($colorAleatorio);
    }

    public function decrecer(){
        if(count($this -> anillas) > 0){
            array_pop($this -> anillas);
        }else{
            $this -> viva = false;
        }
    }

    public function mudarPiel(){
        foreach ($this -> anillas as $anilla){
            $colores = ['r', 'v', 'a'];
            $colorAleatorio = $colores[array_rand($colores)];
            $anilla = new Anilla($colorAleatorio);
        }
    }

    public function envejecer(){
        $this -> edad++;
        if ($this -> edad < 10){
            $rand = rand(1, 10);
            if ($rand <= 8){
                $this -> crecer();
            }else{
                $this -> mudarPiel();
            }
        }else{
            $rand = rand(1, 10);
            if ($rand <= 9){
                $this -> decrecer();
            }else{
                $this -> mudarPiel();
            }
        }
    }

    public function serAtacada(){
        $rand = rand(1, 10);
        if ($rand == 1){
            $this -> viva = false;
        }
    }
}