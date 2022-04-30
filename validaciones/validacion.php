<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=nos">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="funciones.js" ></script>
    <title>Validaciones</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Curso PHP</h1>
                <p class="lead">Validar Formularios</p>
            </div>
        </div>

        <form action="validar.php" method="POST">
            <label for="nombre:">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="" onkeypress="return soloLetras(event);">
            <br>
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" onkeypress="return SoloNumeros(event);">
            <br>
            <label for="email">Email:</label>
            <input type="text" name="email">
            <br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>