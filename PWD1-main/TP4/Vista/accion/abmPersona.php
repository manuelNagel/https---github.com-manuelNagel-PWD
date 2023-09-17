<?php
$resp = false;
$objTrans = new AbmPersona();
if (isset($datos['accion'])) {
    if ($datos['accion'] == 'editar') {
        if ($objTrans->modificacion($datos)) {
            $resp = true;
        }
    }
    if ($datos['accion'] == 'borrar') {
        if ($objTrans->baja($datos)) {
            $resp = true;
        }
    }
    if ($datos['accion'] == 'nuevo') {
        if ($objTrans->alta($datos)) {
            $resp = true;
        }
    }
    if ($datos['accion'] == 'buscar') {
        if ($objTrans->buscar($datos)) {
            $resp = true;
        }
    }
    if ($resp) {
        $mensaje = "La accion " . $datos['accion'] . " se realizo correctamente.";
    } else {
        $mensaje = "La accion " . $datos['accion'] . " no pudo concretarse.";
    }
}
