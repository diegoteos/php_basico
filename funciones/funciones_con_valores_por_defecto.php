<?php

    declare(strict_types=1);

    echo 'A las funciones se les puede asignar variables con valores por defecto, para que al o recibir algun parametro no lancen el mensaje de error.<br><br/>'; 

    function sumar ($num1 = 0, $num2 = 0){
        return $num1 + $num2;
    }


    echo sumar();       //  si la enviamos vacia nos devuelve los valores por defecto sin enviarnos error
    

    echo '<br><br/>';

    $resultado = sumar(84, 25);
    echo $resultado;


    echo '<br><br/>';

    

    echo 'Con declare(strict_types=1) logramos hacer que se respeten los tipos de parametros que se ingresan, pero tiene que estar al inicio del codigo <br/>';
    function sumas(int $n1, int $n2): int 
    {
        return $n1 + $n2;
    }



    echo '<br><br/>';

    echo sumas(4, 3);

?>