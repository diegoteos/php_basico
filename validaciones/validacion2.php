<?php
if (empty($_POST['nombre'])) {
    echo "Ingresa el nombre por favor...";
} elseif (empty($_POST['edad'])) {
    echo "Ingresa la edad por favor...";
} else {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    if (is_numeric($nombre)) {
        echo 'Su nombre no puede ser un numero. <br/>';
    } elseif (!is_numeric($edad)) {
        echo 'La edad debe de ser un numero. <br/>';
    } else {
        echo "Tu nombre es:  " . $_POST['nombre'] . " y tu edad es: " . $_POST['edad'];
    }
}
