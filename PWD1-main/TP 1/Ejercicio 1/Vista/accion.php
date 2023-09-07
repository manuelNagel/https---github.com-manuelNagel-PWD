<?php

        include_once '../Control/Control.php';
        $nro = floatval($_POST["number"]);
        $obj_control = new ejercicio1();
        $respuesta = $obj_control-> queEs($nro);
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






