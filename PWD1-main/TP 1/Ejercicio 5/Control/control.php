<?php
class ejercicio5
{
    public function formulario($nombre, $apellido, $edad, $direccion, $estudios, $sexo)
    {

        $retorno = "Hola yo soy " . $nombre . ", " . $apellido . " tengo " . $edad . " y vivo en " . $direccion . "<br>";

        if ($edad >= 18) {
            $miEdad = "Y soy Mayor de Edad <br>";
        } else {
            $miEdad = "Y soy Menor de Edad <br>";
        }

        switch ($estudios) {
            case 'no':
                $miEstudio = "No poseo Estudios <br>";
                break;
            case 'primario':
                $miEstudio = "Tengo primario completo";
                break;
            case 'secundario':
                $miEstudio = "Tengo secundario completo <br>";
                break;
            default:
                break;
        }
        $genero = "Sexo " . strtoupper($sexo) . "<br>";

        return $retorno . $miEdad . $miEstudio . $genero;
    }
}
