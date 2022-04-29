<?php

if ( empty($_POST['nombre']) ) {
    echo "Ingresa el nombre por favor...";
}elseif (is_numeric($_POST['nombre'])){
    echo "El nombre no puede ser un numero...";
}elseif ( empty($_POST['edad'])){
    echo "Ingresa la edad por favor...";
}elseif(!is_numeric($_POST['edad'])){
    echo "El campo edad edad solo puede contener numeros.";
}else{
    echo "Tu nombre es:  " . $_POST['nombre'] . " y tu edad es: " . $_POST['edad'];
}


