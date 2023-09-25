<?php

class Factoria{
    static function generarElfo(){
        return new Elfo(self::$nombres[rand(0, count)])
    }
}