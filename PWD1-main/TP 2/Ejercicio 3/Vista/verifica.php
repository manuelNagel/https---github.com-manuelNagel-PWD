<?php

    include_once '../Control/controlEj3.php';
    $usuario_name=$_POST["name"];
    $usuario_pass=$_POST["password"];
    //Coleccion de usuarios
    $usuarios= array(
        array('usuario'=>'Juan', 'clave'=>'mondongo1'),
        array('usuario'=>'Pepe', 'clave'=>'mondongo1'),
        array('usuario'=>'Pedro', 'clave'=>'mondongo1'),
    );
    $obj_control = new controlEj3();
    $resultado = $obj_control -> login($usuario_name,$usuario_pass,$usuarios);
    echo $resultado;
    echo "<form action=index.php method=''><input type='submit' value='Regresar'></form>";



?>