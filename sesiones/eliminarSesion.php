<?php

session_start();
unset($_SESSION['datos_usuarios']);
session_destroy();
echo "Se ha eliminado la sesion: ".session_id();
