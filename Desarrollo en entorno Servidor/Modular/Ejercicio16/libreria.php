<?php

function incrementarSegundo(&$horas, &$minutos, &$segundos) {
    $segundos++;
    
    if ($segundos >= 60) {
        $segundos = 0;
        $minutos++;
        
        if ($minutos >= 60) {
            $minutos = 0;
            $horas++;
            
            if ($horas >= 24) {
                $horas = 0;
            }
        }
    }
}