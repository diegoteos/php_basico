<?php


$num_archivos = count($_FILES['archivo']['name']);

for ($i = 0; $i <= $num_archivos; $i++) {
    if (!empty($_FILES['archivo']['name'][$i])) {
        $ruta_nueva = "upload/". $_FILES['archivo']['name'][$i];
        if (file_exists($ruta_nueva)) {
            echo "Este archivo " . $_FILES['archivo']['name'][$i] . " ya se encuentra en el servidor <br>";
        } else {
            $ruta_temporal = $_FILES['archivo']['tmp_name'][$i];
            move_uploaded_file($ruta_temporal, $ruta_nueva);
            echo 'Este archivo ' . $_FILES['archivo']['name'][$i] . " se subio de manera exitosa <br>";
        }
    }
}

