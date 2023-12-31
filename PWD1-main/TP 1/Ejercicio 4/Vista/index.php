<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
  />
</head>

<body>
  <div class="container p-3">
    <div class="border bg-light border-3 rounded p-2 mt-3">
      <h4>Ejercicio 4</h4>
      <form method="get" action="frasemayoredad.php" id="form4">
        <div class="row mb-3">
          <div class="col">
            <label for="name" class="form-label">Nombre: </label>
            <input
              type="text"
              class="form__input form-control"
              placeholder="Ingrese su nombre"
              autocomplete="off"
              name="name"
              id="name"
            />
          </div>
          <div class="col">
            <label for="apellido" class="form-label">Apellido: </label>
            <input
              type="text"
              class="form__input form-control"
              placeholder="Ingrese su apellido"
              autocomplete="off"
              name="apellido"
              id="apellido"
            />
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="edad" class="form-label">Edad: </label>
            <input
              type="number"
              class="form__input form-control"
              placeholder="Ingrese su edad"
              autocomplete="off"
              name="edad"
              id="edad"
            />
          </div>
          <div class="col">
            <label for="dire" class="form-label">Dirección: </label>
            <input
              type="text"
              class="form__input form-control"
              placeholder="Ingrese su dirección"
              autocomplete="off"
              name="dire"
              id="dire"
            />
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
