<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <meta charset=”utf8″ />
</head>

<body>
    <div class="container mt-4 mb-4">
        <div class="border rounded-top bg-secondary">
            <h4 class="m-3 text-info">Cinem@s</h4>
        </div>
        <form method="get" action="cinema.php" id="form" autocomplete="off" class="border rounded-bottom p-2">

            <div class="row mb-3">
                <div class="col">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form__input form-control" placeholder="Titulo" autocomplete="off"
                        name="titulo" id="titulo" />
                </div>

                <div class="col">
                    <label for="actores" class="form-label">Actores</label>
                    <input type="text" class="form__input form-control" placeholder="Actores" autocomplete="off"
                        name="actores" id="actores" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="director" class="form-label">Director</label>
                    <input type="text" class="form__input form-control" placeholder="Director" autocomplete="off"
                        name="director" id="director" />
                </div>

                <div class="col">
                    <label for="guion" class="form-label">Guión</label>
                    <input type="text" class="form__input form-control" placeholder="Guión" autocomplete="off"
                        name="guion" id="guion" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="produccion" class="form-label">Produccion</label>
                    <input type="text" class="form__input form-control" placeholder="" autocomplete="off"
                        name="produccion" id="produccion" />
                </div>

                <div class="col">
                    <label for="ano" class="form-label">Año</label>
                    <input type="number" class="form__input form-control" placeholder="" autocomplete="off" name="ano"
                        id="ano" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="nacionalidad" class="form-label">Nacionalidad</label>
                    <input type="text" class="form__input form-control" placeholder="" autocomplete="off"
                        name="nacionalidad" id="nacionalidad" />
                </div>

                <div class="col">
                    <label for="seleccion_genero" class="form-label">Género</label>
                    <select name="genero" class="form-select" aria-label="select example" id="seleccion_genero">
                        <option selected disabled value="">Seleccione una opción...</option>
                        <option value="comedia">Comedia</option>
                        <option value="drama">Drama</option>
                        <option value="terror">Terror</option>
                        <option value="romanticas">Románticas</option>
                        <option value="suspenso">Suspenso</option>
                        <option value="otras">Otras</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="duracion" class="form-label">Duracion</label>
                    <input type="number" class="form__input form-control" placeholder="" autocomplete="off"
                        name="duracion" id="duracion" />(minutos)
                </div>

                <div class="col">
                    <div class="pb-3">Restricciones de Edad</div>
                    <div id="edad_radio_group">
                        <div class="form-check form-check-inline">
                            <input type="radio" value="todos" class="form-check-input" id="todos"
                                name="restriccion_edad" />
                            <label class="form-check-label" for="todos">
                                Todos los públicos
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="radio" value="mayor7" class="form-check-input" id="mayor7"
                                name="restriccion_edad" />
                            <label class="form-check-label" for="mayor7">
                                Mayores de 7 años
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="radio" value="mayor18" class="form-check-input" id="mayor18"
                                name="restriccion_edad" />
                            <label class="form-check-label" for="mayor18">
                                Mayores de 18 años
                            </label>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col">
                    <label for="sinopsis" class="form-label">Sinopsis</label>
                    <textarea class="form-control" placeholder="" id="sinopsis" name="sinopsis"
                        style="height: 100px"></textarea>
                </div>
            </div>

            <div class="d-grid mt-4">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="submit">Enviar</button>
                    <button class="btn btn-outline-dark" type="reset">Borrar</button>
                </div>
            </div>
        </form>
    </div>
    <form action="../../../index.html" class="m-4">
        <input class="btn btn-primary" type="submit" value="Inicio" />
    </form>


    <script>
        const validation = new window.JustValidate('#form', {
            errorFieldCssClass: 'is-invalid',
        });

        validation
            .addField('#titulo', [{
                rule: 'required',
                errorMessage: 'Este campo debe ser completado',
            },])
            .addField('#actores', [{
                rule: 'required',
                errorMessage: 'Este campo debe ser completado',
            },])
            .addField('#director', [{
                rule: 'required',
                errorMessage: 'Este campo debe ser completado',
            },])
            .addField('#guion', [{
                rule: 'required',
                errorMessage: 'Este campo debe ser completado',
            },])
            .addField('#produccion', [{
                rule: 'required',
                errorMessage: 'Este campo debe ser completado',
            },])
            .addField('#nacionalidad', [{
                rule: 'required',
                errorMessage: 'Este campo debe ser completado',
            },])
            .addField('#sinopsis', [{
                rule: 'required',
                errorMessage: 'Este campo debe ser completado',
            },])
            .addField('#ano', [{
                rule: 'number',
            }, {
                rule: 'minNumber',
                value: 1,
                errorMessage: 'Debe ser mayor a 1',
            }, {
                rule: 'maxNumber',
                value: 2024,
                errorMessage: 'Debe ser menor a 2024',
            }, {
                rule: 'maxLength',
                value: 4,
                errorMessage: 'Debe ser menor a 4 caracteres',
            }, {
                rule: 'required',
                errorMessage: 'Este campo debe ser completado',
            },])
            .addField('#duracion', [{
                rule: 'number',
            }, {
                rule: 'minNumber',
                value: 5,
                errorMessage: 'Debe ser mayor o igual a 5',
            }, {
                rule: 'maxLength',
                value: 3,
                errorMessage: 'Debe ser menor a 3 caracteres',
            }, {
                rule: 'required',
                errorMessage: 'Este campo debe ser completado',
            },])

            .addField('#seleccion_genero', [{
                rule: 'required',
                errorMessage: 'Debe elegir una opción',
            },])
            .addRequiredGroup(
                '#edad_radio_group',
                'Debe elegir una restricción de edad',
            )
            .onSuccess((event) => {
                const form = document.getElementById('form');
                form.submit();
            });
    </script>

</body>