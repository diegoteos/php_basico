<?php

    $a = 9;
    $b = 6;
    echo ($a > $b) ? "A es mayor que B <br/>" : "B es mayor que A <br/>";  // el operador ternario nos ayuda a hacer validaciones en una sola linea

    $resultado = ($a > $b) ? true : false;
    echo ($resultado) . "<br/>";
    var_dump($resultado);

?>