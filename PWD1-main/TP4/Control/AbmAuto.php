<?php
// include_once './Modelo/Auto.php';
class AbmAuto
{

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden 
     * con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param)
    {
        $obj = null;

        if (array_key_exists('Patente', $param)) {
            $obj = new Auto();
            $x = $obj->listar(" Patente='" . $param['Patente'] . "'");

            $obj->setear($x[0]->getPatente(), $x[0]->getMarca(), $x[0]->getModelo(), $x[0]->getObjetoDuenio());
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden 
     * con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;
        if (isset($param['Patente'])) {
            $obj = new Auto();
            $obj->setear($param['Patente'], null, null, null);
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

        if (isset($param['Patente'])) {
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

        $objAuto = new Auto();
        $objAuto->setear($param['Patente'], $param['Marca'], $param['Modelo'], $param['DniDuenio']);
        if ($objAuto != null and $objAuto->insertar()) {
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
            $esteObjauto = $this->cargarObjetoConClave($param);
            if ($esteObjauto != null and $esteObjauto->eliminar()) {
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
        if ($this->seteadosCamposClaves($param)) { // devuelve true

            $esteObjauto = $this->cargarObjeto($param); // devuelve el objeto de con esa Patente
            $objPers = new Persona();
            $objPers->setNroDni($param['DniDuenio']);
            $objPers->cargar();
            $esteObjauto->setObjetoDuenio($objPers);


            if ($esteObjauto != null and $esteObjauto->modificar()) {
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
            if (isset($param['Patente'])) {
                $where = " Patente ='" . $param['Patente'] . "'";
            }
            if (isset($param['Marca'])) {
                $where = " Marca ='" . $param['Marca'] . "'";
            }
            if (isset($param['Modelo'])) {
                $where = " Modelo ='" . $param['Modelo'] . "'";
            }
            if (isset($param['DniDuenio'])) {
                $where = " DniDuenio ='" . $param['DniDuenio'] . "'";
            }
        }
        $auto = new Auto();
        $arreglo = $auto->listar($where);

        return $arreglo;
    }
}
