<?php
/*
if (empty($_POST['nombre'])) {
    echo "Ingresa el nombre por favor...";
} elseif (is_numeric($_POST['nombre'])) {
    echo "El nombre no puede ser un numero...";
} elseif (empty($_POST['edad'])) {
    echo "Ingresa la edad por favor...";
} elseif (!is_numeric($_POST['edad'])) {
    echo "El campo edad edad solo puede contener numeros.";
} else {
    echo "Tu nombre es:  " . $_POST['nombre'] . " y tu edad es: " . $_POST['edad'];
}

*/


if (!empty($_POST['nombre']) && !empty($_POST['edad'])) {
    if (!is_numeric($_POST['nombre']) && is_numeric($_POST['edad'])) {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        echo "Bienvenido, su nombre es $nombre y su edad es $edad <br/>";
        echo 'Gracias por registrarse';
    } else {
        if (is_numeric($_POST['nombre'])) {
            echo "Su nombre no puede ser un numero. <br/>";
        } elseif (!is_numeric($_POST['edad'])) {
            echo 'Su edad debe de ser numerica. <br />';
        }
    }
}
if (empty($_POST['nombre']) && empty($_POST['edad'])) {
    echo 'Debe de llenar todos los campos.<br />';
} elseif (empty($_POST['nombre']) || is_numeric($_POST['nombre'])) {
    if (empty($_POST['nombre'])) {
        echo 'Debes ingresr tu nombre. <br />';
    } elseif (is_numeric($_POST['nombre']) && is_null($_POST['edad'])) {
        echo 'Su nombre no debe de ser un numero. <br />';
    }
} elseif (empty($_POST['edad']) && !is_numeric($_POST['edad'])) {
    if (empty($_POST['edad'])) {
        echo 'Debe de ingresar su edad. <br />';
    } elseif (!is_numeric($_POST['edad'])) {
        echo 'Su edad debe de ser un numero. <br />';
    }
}
