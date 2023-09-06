<?php

    class controlEj4 {

        public function mayorEdad($nombre,$apellido,$edad,$direccion){
            $retorno = "";
            $retornoEdad = "";
            if ($edad >= 18)
                $retornoEdad = "Y soy Mayor de Edad";
            else
                $retornoEdad = "Y soy Menor de Edad"; 

            $retorno = "Hola yo soy ".$_GET['name'].", ".$_GET['apellido']." tengo ".$_GET['edad']." y vivo en ".$_GET['dire'].".";

            return [$retorno,$retornoEdad];
        }
    }