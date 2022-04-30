<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Subir archivos</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron jumbotron-fluid primary">
            <div class="container">
                <h1 class="display-4">Curso PHP</h1>
                <p class="lead">Subir archivos</p>
            </div>
            <form action=procesar_archivos.php method=POST enctype="multipart/form-data">
                <input type="file" name="archivo">
                <button type="submit">Enviar</button>
            </form>
</body>

</html>