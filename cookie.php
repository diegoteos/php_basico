<?php

// Contador de visitas
if (!isset($_COOKIE['visitas'])) {
    $_COOKIE['visitas'] = 0;
}

// Si la cookie si existe
$contador = $_COOKIE['visitas'] + 1;
setcookie('visitas', $contador, time() + 120);

if ($contador > 1) {
    echo 'Hola bienvenido de regreso, tu has visitado este sitio ' . $contador . ' veces';
}else {
    echo 'Hola esta es tu primera vez aqui';
}

?>