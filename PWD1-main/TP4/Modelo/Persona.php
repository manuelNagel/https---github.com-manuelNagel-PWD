<?php
class Persona
{
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $mensajeoperacion;

    public function __construct()
    {
        $this->nroDni = '';
        $this->apellido = '';
        $this->nombre = '';
        $this->fechaNac = '';
        $this->telefono = '';
        $this->domicilio = '';
        $this->mensajeoperacion = "";
    }

    public function setear($dni, $apellido, $nombre, $fechaN, $telef, $domic)
    {
        $this->setNroDni($dni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fechaN);
        $this->setTelefono($telef);
        $this->setDomicilio($domic);
    }

    public function getNroDni()
    {
        return $this->nroDni;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getFechaNac()
    {
        return $this->fechaNac;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    public function setNroDni($dni)
    {
        $this->nroDni = $dni;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setFechaNac($fecha)
    {
        $this->fechaNac = $fecha;
    }
    public function setTelefono($telef)
    {
        $this->telefono = $telef;
    }
    public function setDomicilio($domic)
    {
        $this->domicilio = $domic;
    }

    public function getmensajeoperacion()
    {
        return $this->mensajeoperacion;
    }
    public function setmensajeoperacion($valor)
    {
        $this->mensajeoperacion = $valor;
    }

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE NroDni = " . $this->getNroDni();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                }
            }
        } else {
            $this->setMensajeoperacion("Persona->listar: " . $base->getError());
        }
        return $resp;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO persona(NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)  
              VALUES('"
            . $this->getNroDni() . "', '"
            . $this->getApellido() . "', '"
            . $this->getNombre() . "', '"
            . $this->getfechaNac() . "', '"
            . $this->getTelefono() . "', '"
            . $this->getDomicilio() . "'
        );";
        if ($base->Iniciar()) {
            if ($dni = $base->Ejecutar($sql)) {
                $this->setNroDni($dni);
                $resp = true;
            } else {
                $this->setmensajeoperacion("Persona->insertar ejecutar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Persona->insertar iniciar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE persona SET 
            Apellido='" . $this->getApellido() . "', Nombre='" . $this->getNombre() . "', 
            fechaNac='" . $this->getfechaNac() . "', Telefono='" . $this->getTelefono() . "', 
            Domicilio='" . $this->getDomicilio() . "' WHERE NroDni=" . $this->getNroDni();

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeoperacion("Persona->modificar: " . $base->getError());
            }
        } else {
            $this->setMensajeoperacion("Persona->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM persona WHERE NroDni=" . $this->getNroDni();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeoperacion("Persona->eliminar: " . $base->getError());
            }
        } else {
            $this->setMensajeoperacion("Persona->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {
                    $obj = new persona();
                    $obj->setear(
                        $row['NroDni'],
                        $row['Apellido'],
                        $row['Nombre'],
                        $row['fechaNac'],
                        $row['Telefono'],
                        $row['Domicilio']
                    );
                    array_push($arreglo, $obj);
                }
            }
        } else {
            $this->setMensajeoperacion("persona->listar: " . $base->getError());
        }

        return $arreglo;
    }
}
