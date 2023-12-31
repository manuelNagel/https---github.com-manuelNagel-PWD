<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <meta charset=”utf8″ />
</head>

<body>
    <div class="container mt-4 mb-4">
        <div class="card" style="width: 18rem; left: 35%;">
            <h4 class="m-3">Member Login</h4>
            <form method="post" action="verifica.php" id="form" autocomplete="off">
                <div class="m-3">
                    <input type="text" class="form__input form-control" placeholder="Username" autocomplete="off" name="name" id="name" />
                </div>
                <div class="m-3">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="m-3">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>

        <form action="../../../index.html" class="m-4">
            <input class="btn btn-primary" type="submit" value="Inicio" />
        </form>
    </div>


    <script>
        const validation = new window.JustValidate('#form', {
            errorFieldCssClass: 'is-invalid',
        });

        validation
            .addField('#name', [{
                rule: 'required',
                errorMessage: 'Este campo debe ser completado',
            }, ])
            .addField('#password', [{
                rule: 'password',
                errorMessage: 'La contraseña como mínimo debe incluir 8 caracteres, al menos una letra y un número',
            }, {
                rule: 'required',
                errorMessage: 'Debe ingresar su contraseña',
            }])

        .onSuccess((event) => {
            const form = document.getElementById('form');
            form.submit();
        });
    </script>


</body>