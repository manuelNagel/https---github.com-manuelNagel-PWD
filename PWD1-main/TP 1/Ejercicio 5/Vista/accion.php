<?php
include_once '../Control/control.php';

//Verificacion si el GET recibio algo
if ($_GET) {
    $nombre = $_GET['name'];
    $apellido = $_GET['apellido'];
    $edad = $_GET['edad'];
    $direccion = $_GET['dire'];
    $estudio = $_GET['estudios'];
    $sexo = $_GET['sexo'];

    $obj_control = new ejercicio5();
    $respuesta = $obj_control->formulario($nombre, $apellido, $edad, $direccion, $estudios, $sexo);
}
echo $respuesta;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action=index.php method=''><input type='submit' value='Regresar'></form>
</body>

</html>