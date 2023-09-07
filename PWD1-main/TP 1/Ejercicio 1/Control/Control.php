<?php
    
    class ejercicio1 {
        
        public function queEs($nro){
   
            $retorno="";
            if ($nro === 0)
                $retorno = "El número ".$nro." es CERO <br />";
            else{
                if ($nro > 0)
                    $retorno = "El número ".$nro." es POSITIVO";
                else
                    $retorno = "El número ".$nro." es NEGATIVO";  
            }
            return $retorno;
        }
    
    }










?>