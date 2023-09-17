<?php
session_start();

function data_submitted()
{
    $_AAux = array();
    if (!empty($_POST))
        $_AAux = $_POST;
    else
            if (!empty($_GET)) {
        $_AAux = $_GET;
    }
    if (count($_AAux)) {
        foreach ($_AAux as $indice => $valor) {
            if ($valor == "")
                $_AAux[$indice] = 'null';
        }
    }
    return $_AAux;
}

function verEstructura($e)
{
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}

spl_autoload_register(function ($clase) {
    $directorys = array(
        $_SESSION['ROOT'] . 'Modelo/',
        $_SESSION['ROOT'] . 'Modelo/conector/',
        $_SESSION['ROOT'] . 'Control/',
        $_SESSION['ROOT'] . 'Vista/',
        $_SESSION['ROOT'] . 'Vista/accion/',
    );
    foreach ($directorys as $directory) {
        if (file_exists($directory . $clase . '.php')) {
            require_once($directory . $clase . '.php');
            return;
        }
    }
});
