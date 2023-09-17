<?php
$Titulo = "Ver personas";
include_once "./estructura/cabecera.php";
include_once "../configuracion.php";
// Llama al objeto con métodos para manejar ABM de personas:
$objAbmPersona = new AbmPersona();
// Procede a buscar todas las personas en la tabla:
$listadoPersonas = $objAbmPersona->buscar(null);
?>

<div class="container-sm p-4 text-center">
    <h4 class="text-center mb-4"><i class="fas fa-user"></i> Listado de Personas:</h4>

    <hr>

    <div class="m-3">
        <a href="NuevaPersona.php" class='btn btn-outline-info mx-2'><i class="fa-regular fa-plus"></i> Cargar nueva persona</a>
        <a href="BuscarPersona.php" class='btn btn-outline-info mx-2'><i class="fas fa-magnifying-glass"></i> Buscar persona por DNI</a>
        <a href="CambioDuenio.php" class='btn btn-outline-info mx-2'><i class="fas fa-people-arrows"></i> Cambiar dueño de auto</a>
    </div>

    <table class='table table-striped table-hover table-responsive text-center'>
        <?php

        if (count($listadoPersonas) > 0) {
            // Se arma el encabezado, sabiendo las columnas que tiene la tabla:
            echo "<thead>
			<tr>
			  	<th scope=col>DNI</th>
			  	<th scope=col>Apellido</th>
			  	<th scope=col>Nombre</th>
			  	<th scope=col>Fecha de nacimiento</th>
			  	<th scope=col>Teléfono</th>
			  	<th scope=col>Domicilio</th>
			  	<th scope=col>Autos en propiedad</th>
			</tr>
		</thead>
		<tbody>";
            // Se lista cada fila con los datos:
            foreach ($listadoPersonas as $objetoPersona) {
                // echo $objetoPersona;

                echo "<tr>";
                echo "<td>" . $objetoPersona->getNroDni() . "</td>";
                echo "<td>" . $objetoPersona->getApellido() . "</td>";
                echo "<td>" . $objetoPersona->getNombre() . "</td>";
                echo "<td>" . $objetoPersona->getfechaNac() . "</td>";
                echo "<td>" . $objetoPersona->getTelefono() . "</td>";
                echo "<td>" . $objetoPersona->getDomicilio() . "</td>
					<td><a href='autosPersona.php?dni=" . $objetoPersona->getNroDni() . "' class='btn btn-outline-warning btn-sm'>
				<i class='fa-regular fa-eye'></i> Ver autos</a></td>
		</tr>";
            }
            echo "</tbody>";
        } else {
            echo "<div class='alert alert-info' role='alert'> El listado de autos está vacío. </div>";
        }
        ?>
    </table>
</div>
<?php include_once("./estructura/pie.php"); ?>