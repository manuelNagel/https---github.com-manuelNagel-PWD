<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <div class="container p-3">
        <div class="border bg-light border-3 rounded p-2 mt-3">
            <h4>Ejercicio 5</h4>
            <form method="get" action="accion.php" id="form5">
                <div class="row mb-3">
                    <div class="col">
                        <label for="name" class="form-label">Nombre: </label>
                        <input type="text" class="form__input form-control" placeholder="Ingrese su nombre" autocomplete="off" name="name" id="name" required />
                    </div>
                    <div class="col">
                        <label for="apellido" class="form-label">Apellido: </label>
                        <input type="text" class="form__input form-control" placeholder="Ingrese su apellido" autocomplete="off" name="apellido" id="apellido" required />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="edad" class="form-label">Edad: </label>
                        <input type="number" class="form__input form-control" placeholder="Ingrese su edad" autocomplete="off" name="edad" id="edad" required />
                    </div>
                    <div class="col">
                        <label for="dire" class="form-label">Dirección: </label>
                        <input type="text" class="form__input form-control" placeholder="Ingrese su dirección" autocomplete="off" name="dire" id="dire" required />
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-5">
                        <label for="sexo" class="form-label">Sexo: </label>
                        <select name="sexo" class="form-select" aria-label="select example" id="sexo">
                            <option selected value="femenino">Femenino</option>
                            <option value="masculino">Masculino</option>
                            <option value="otros">Otros</option>
                        </select>
                    </div>
                    <div class="col-7">
                        <div class="pb-3">Nivel de estudio:</div>
                        <div id="estudio_radio_group">
                            <div class="form-check form-check-inline">
                                <input type="radio" value="no" class="form-check-input" id="no" name="estudios" checked />
                                <label class="form-check-label" for="no">
                                    No tiene estudios
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="radio" value="primario" class="form-check-input" id="primario" name="estudios" />
                                <label class="form-check-label" for="primario">
                                    Estudios primarios
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="radio" value="secundario" class="form-check-input" id="secundario" name="estudios" />
                                <label class="form-check-label" for="secundario">
                                    Estudios secundarios
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <input class="btn btn-primary" type="submit" value="Enviar" />
            </form>
        </div>
    </div>
    <form action="../../../index.html" class="m-4">
        <input class="btn btn-primary" type="submit" value="Inicio" />
    </form>
</body>