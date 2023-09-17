<!DOCTYPE html>
<html lang="es">

<head>
    <title><?php echo $Titulo ?></title>
    <meta charset="utf-8">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- CSS PROPIO -->
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="shortcut icon" href="../css/img/favicon.ico" type="image/x-icon" />

</head>

<body class="container-fluid ">
    <!-- NAVBAR INICIO -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border rounded">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="../../Vista/">Inicio</a>
            <img src="../css/img/logo.png" alt="FAI" width="30" height="24">
            <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='../../../index.html'">Salir <span>
                    <svg class="bi" width="20" height="20" fill="white">
                        <use xlink:href="../css/bootstrap-icons/bootstrap-icons.svg#box-arrow-right" />
                    </svg></span>
            </button>

        </div>
    </nav>
    <!-- NAVBAR FIN -->
    <?php
    include_once "../../configuracion.php";

    ?>