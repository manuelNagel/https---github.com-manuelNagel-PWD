<?php $Titulo = "Inicio Grupo 7";
include_once "./estructura/cabecera.php";
?>

<div class="container-sm p-4 text-center ">
    <div class="row p-2 my-1">
        <div class="col-sm-4">
            <div class="card-section  ml-4 mr-4 d-flex flex-column">
                <div class="card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1">Listado Autos</h2>
                </div>
                <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                    <p class="card-text">Muestra todos los datos de los autos que se encuentran cargados,
                        junto con el nombre y apellido del due&ntilde;o de cada auto</p>
                    <br>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-lg btn-lg" onclick="window.location.href='./VerAutos.php'">Ver Autos</button>
                </div>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="card-section  ml-4 mr-4 d-flex flex-column">
                <div class="card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1">Buscar un Auto</h2>
                </div>
                <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                    <p class="card-text">Muestra los datos referidos a un auto con la patente ingresada</p>
                    <br>
                </div>
                <div class="card-footer-second">
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='./BuscarAuto.php'">Buscar Auto</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card-section  ml-4 mr-4 d-flex flex-column">
                <div class="card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1">Agregar Auto</h2>
                </div>
                <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                    <p class="card-text">Cargar un nuevo auto al sistema</p>
                    <br>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='./NuevoAuto.php'">Nuevo Auto</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-sm p-4 text-center">
    <div class="row p-2 my-1">
        <div class="col-sm-4">
            <div class="card-section  ml-4 mr-4 d-flex flex-column">
                <div class="card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1">Listado Personas</h2>
                </div>
                <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                    <p class="card-text">Muestra todos los datos de las personas que se encuentran cargadas</p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='./ListaPersonas.php'">Ver Personas</button>
                </div>
            </div>

        </div>
        <div class="col-sm-4">
            <div class="card-section  ml-4 mr-4 d-flex flex-column">
                <div class="card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1">Buscar y Actualizar Persona</h2>
                </div>
                <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                    <p class="card-text">Ingresa el numero de DNI de la persona para buscar y modificar sus datos</p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='./BuscarPersona.php'">Buscar Persona</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card-section  ml-4 mr-4 d-flex flex-column">
                <div class="card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1">Agregar Persona</h2>
                </div>
                <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                    <p class="card-text">Cargar una nueva persona al sistema</p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='./NuevaPersona.php'">Nueva Persona</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-sm p-4 text-center">
    <div class="row p-2 my-1">
        <div class="col-sm-4">
            <div class="card-section  ml-4 mr-4 d-flex flex-column">
                <div class="card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1">Cambiar Propietario del Auto</h2>
                </div>
                <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                    <p class="card-text"> Se ingresa el numero de DNI del propietario y patente del auto a cambiar</p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='./CambioDuenio.php'">Cambiar Due&ntilde;o</button>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card-section  ml-4 mr-4 d-flex flex-column">
                <div class="card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1">GRUPO 7</h2>
                </div>
                <div class="card-body text-center d-flex flex-column align-items-center justify-content-center">
                    <p class="card-text"> Informacion de los integrantes del Grupo 7</p>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='./Nosotros.php'">Nosotros</button>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include_once("./estructura/pie.php"); ?>