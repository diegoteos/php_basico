<?php
    
    session_start(); // declaramos que el script se utilizan o pueden utlilizar sesiones

    $_SESSION['datos_usuarios'] = $_POST['usuario'];

    echo "Felicidades has iniciado sesion como: " . $_SESSION['datos_usuarios'];

    //var_dump($_SESSION);

?>