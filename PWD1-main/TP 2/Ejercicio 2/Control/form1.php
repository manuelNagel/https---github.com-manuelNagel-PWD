<?php
//Verificacion si el POST recibio algo
if ($_POST){
    
    $numero = $_POST['numero1'];

    if($numero==0){
        echo "El número ".$numero." es CERO <br />";
        echo "<form action=../Vista/index.html method=''><input type='submit' value='Regresar'></form>";
    } else if ($numero>=1){
        echo "El número ".$numero." es POSITIVO";
        echo "<form action=../Vista/index.html method=''><input type='submit' value='Regresar'></form>";
    } else {
        echo "El número ".$numero." es NEGATIVO";
        echo "<form action=../Vista/index.html method=''><input type='submit' value='Regresar'></form>";
    }

} else {
    echo "No se recibieron datos <br />";
    echo "<form action=../Vista/index.html method=''><input type='submit' value='Regresar'></form>";
}


?>