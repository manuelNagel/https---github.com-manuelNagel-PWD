<?php
// require_once(__DIR__ . '/conector/BaseDatos.php');
// include_once 'Persona.php';
class Auto
{
    private $patente;
    private $marca;
    private $modelo;
    private $objetoDuenio;
    private $mensajeoperacion;

    public function __construct()
    {
        $this->objetoDuenio = "";
        $this->marca = "";
        $this->modelo = "";
        $this->patente = "";
        $this->mensajeoperacion = "";
    }

    public function setear($patente, $marca, $modelo, $duenio)
    {
        $this->setObjetoDuenio($duenio);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setPatente($patente);
    }

    public function getObjetoDuenio()
    {
        return $this->objetoDuenio;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getPatente()
    {
        return $this->patente;
    }

    public function setObjetoDuenio($objDuenio)
    {
        $this->objetoDuenio = $objDuenio;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function setPatente($patente)
    {
        $this->patente = $patente;
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
        $sql = "SELECT * FROM auto WHERE Patente = " . $this->getPatente();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $duenio = new Persona();
                    $duenio->setNroDni($row['DniDuenio']);
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $duenio);
                }
            }
        } else {
            $this->setmensajeoperacion("Auto->listar: " . $base->getError());
        }
        return $resp;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO auto(Patente,Marca,Modelo,DniDuenio)  
              VALUES('" . $this->getPatente() . "','" . $this->getMarca() . "','" . $this->getModelo() . "','" . $this->getObjetoDuenio() . "');";
        if ($base->Iniciar()) {
            if ($patente = $base->Ejecutar($sql)) {
                $this->setPatente($patente);
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->insertar ejecutar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->insertar iniciar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $dniDuenio = $this->getObjetoDuenio()->getNroDni();

        $sql = "UPDATE auto SET Marca='" . $this->getMarca() . "', Modelo='" . $this->getModelo() . "', 
        DniDuenio='" . $dniDuenio . "' WHERE Patente='" . $this->getPatente() . "'";
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM auto WHERE Patente='" . $this->getPatente() . "'";

        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {
                    $obj = new Auto();
                    $duenio = new Persona();
                    $duenio->setNroDni($row['DniDuenio']);
                    $duenio->cargar();
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $duenio);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }

        return $arreglo;
    }
}
