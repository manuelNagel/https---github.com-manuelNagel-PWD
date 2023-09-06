<!DOCTYPE html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
  />
</head>

<body>
  <div class="container p-3">
    <div class="border bg-light border-3 rounded p-2 mt-3 mb-4">
      <h3>Ejercicio 2</h3>
      <form method="get" action="accion.php" id="form2">
        <div class="row mb-3">
          <div class="col">
            <label for="lunes" class="form-label">Horas Cursadas Lunes: </label>
            <input type="number" class="form-control" name="lunes" id="lunes" required />
          </div>
          <div class="col">
            <label for="martes" class="form-label"
              >Horas Cursadas Martes:
            </label>
            <input
              type="number"
              class="form-control"
              name="martes"
              id="martes"
              required
            />
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="miercoles" class="form-label"
              >Horas Cursadas Miercoles:
            </label>
            <input
              type="number"
              class="form-control"
              name="miercoles"
              id="miercoles"
              required
            />
          </div>
          <div class="col">
            <label for="jueves" class="form-label"
              >Horas Cursadas Jueves:
            </label>
            <input
              type="number"
              class="form-control"
              name="jueves"
              id="jueves"
              required
            />
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="viernes" class="form-label"
              >Horas Cursadas Viernes:
            </label>
            <input
              type="number"
              class="form-control mb-3"
              name="viernes"
              id="viernes"
              required
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
