<?php
    echo 'Las funciones ejecutan acciones que se definen <br />';

    function holaMundo (){

        echo 'Hola mundo desde la funcion<br />';

    }

    holaMundo();


    function sumar ($a, $b) {
        return $a + $b;
        echo $a + $b;
    }

    echo sumar(7, 5);  // imprimimos directamente con un echo

    $suma = sumar (8, 9);   //ingresamos lo que la funcion nos retorna a una variable para luego imprimirla 
    echo '<br>' .  $suma;

?>