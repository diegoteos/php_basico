<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="
    sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>App WEB</title>
</head>

<body>

    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Nuestra sorprendente Web Appp</h1>
                <p class="lead">Hecha en PHP 8 y Bootstrap.</p>
            </div>
        </div>

        <?php

        echo 'Imprimimos en con PHP una lista desordenada:<br/>';
        for ($i = 0; $i <= 10; $i++) :
        ?>
            <li><?php echo $i; ?></li>
        <?php endfor ?>

        <?php $numero = 0; if ($numero >= 5): ?>

            El numero si es mayor a 1

            <?php else: ?>

            El numero no es mayor a 1
            <?php endif; ?>
    </div>

</body>

</html>