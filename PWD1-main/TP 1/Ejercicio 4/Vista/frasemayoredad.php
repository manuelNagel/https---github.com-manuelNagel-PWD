<?php
    include_once '../Control/controlEj4.php';
   include_once '../utils/funciones.php'; 
    
    // $datos = data_submitted();
    // echo $datos[0];

    $nombre = $_GET['name'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['dire'];
 
    $obj_control = new controlEj4();
    
    $respuesta = $obj_control->mayorEdad($nombre,$apellido,$edad,$direccion);
    echo $respuesta[0];
    echo $respuesta[1];
    echo "<form action=index.php method=''><input type='submit' value='Regresar'></form>";

?>