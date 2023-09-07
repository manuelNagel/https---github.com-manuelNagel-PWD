<?php
    include_once '../Control/controlEj2.php';
    $semana = [];
    array_push($semana, $_GET['lunes'], $_GET['martes'], $_GET['miercoles'], $_GET['jueves'], $_GET['viernes']);

    $obj_control = new ejercicio2();
    $respuesta = $obj_control->horasSemanales($semana);

    echo $respuesta;
    echo "<form action=index.php method=''><input type='submit' value='Regresar'></form>";



?>