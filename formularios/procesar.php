<?php

if ($_POST != null){
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['password'];
    echo $nombre . '<br/>';

    $cript = md5(md5(md5($contraseña)));

    echo $cript . '<br/>';


}