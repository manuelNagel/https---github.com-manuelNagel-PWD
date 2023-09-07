<?php

    class controlEj3 {


        public function login($usuario_name,$usuario_pass,$usuarios){
            $coincide = false;
            $retorno="";
            if(!($usuario_name==$usuario_pass)){
            foreach($usuarios as $usuario){
                if($usuario_name==$usuario['usuario'] && $usuario_pass==$usuario['clave']){
                    $coincide=true;
                }
            }
            } else {
                $retorno = "Tu usuario y cotraseña no pueden ser iguales! <br />";
            }
            if($coincide){
                $retorno = "Bienvenido de vuelta! <br />";
            } else {
                $retorno = "Datos no registrados <br />";
               
            }

            return $retorno;
        }

    }