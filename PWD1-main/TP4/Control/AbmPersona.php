<?php
class AbmPersona
{

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden 
     * con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param)
    {
        $obj = null;
        if (array_key_exists('NroDni', $param)) {
            $obj = new Persona();
            $obj->setear(
                $param['NroDni'],
                $param['Apellido'],
                $param['Nombre'],
                $param['fechaNac'],
                $param['Telefono'],
                $param['Domicilio']
            );
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden 
     * con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Persona
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;
        if (isset($param['NroDni'])) {
            $obj = new Persona();
            $obj->setear($param['NroDni'], null, null, null, null, null);
        }
        return $obj;
    }


    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['NroDni'])) {
            $resp = true;
        }
        return $resp;
    }

    /**
     * 
     * @param array $param
     */
    public function alta($param)
    {
        $resp = false;
        $ObjPersona = $this->cargarObjeto($param);
        if ($ObjPersona != null and $ObjPersona->insertar()) {
            $resp = true;
        }
        return $resp;
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $ObjPersona = $this->cargarObjetoConClave($param);
            if ($ObjPersona != null and $ObjPersona->eliminar()) {
                $resp = true;
            }
        }

        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $ObjPersona = $this->cargarObjeto($param);
            if ($ObjPersona != null and $ObjPersona->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * permite buscar un objeto
     * @param array $param
     */
    public function buscar($param)
    {
        $where = "";

        if ($param != NULL) {
            if (isset($param['NroDni'])) {
                $where = " NroDni ='" . $param['NroDni'] . "'";
            }
            if (isset($param['Apellido'])) {
                $where = " Apellido ='" . $param['Apellido'] . "'";
            }
            if (isset($param['FechaNac'])) {
                $where = " FechaNac ='" . $param['FechaNac'] . "'";
            }
            if (isset($param['Telefono'])) {
                $where = " Telefono ='" . $param['Telefono'] . "'";
            }
            if (isset($param['Domicilio'])) {
                $where = " Domicilio ='" . $param['Domicilio'] . "'";
            }
        }

        $arreglo = Persona::listar($where);
        return $arreglo;
    }
}
