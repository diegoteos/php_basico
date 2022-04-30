<?php

$ruta_nueva = "upload/" . $_FILES['archivo']['name'];

if (file_exists($ruta_nueva)) {
    echo 'Este archivo ya existe';
    die();
}

$ruta_temporal = $_FILES['archivo']['tmp_name'];

move_uploaded_file($ruta_temporal, $ruta_nueva);


echo 'El archivo es: <br/>';
?>


<center> <?php echo "<img src=\"$ruta_nueva\">"; ?></center>