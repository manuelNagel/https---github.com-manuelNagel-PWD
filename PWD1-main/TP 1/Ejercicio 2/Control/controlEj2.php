<?php


    class ejercicio2{

        public function horasSemanales($semana){
            $retorno="";
            foreach($semana as $dias){
                $horasTotales = $horasTotales + $dias;
            }
            $retorno = "Horas totales cursadas por semana: ".$horasTotales;
            return $retorno;
        }

    }