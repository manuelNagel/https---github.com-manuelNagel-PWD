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
    <div class="border bg-light border-3 rounded p-2 mt-3 mb-4">
      <h3>Ejercicio 1</h3>
      <form method="post" action="accion.php" id="form1">
        <label for="number" class="form-label">Ingrese un número:</label>
        <input
          type="number"
          class="form-control mb-3"
          id="number"
          name="number"
        />
        <input class="btn btn-primary" type="submit" value="Enviar" />
      </form>
    </div>
  </div>
  <form action="../../../index.html" class="m-4">
    <input class="btn btn-primary" type="submit" value="Inicio" />
  </form>
</body>
