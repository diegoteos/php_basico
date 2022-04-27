<?php

    echo 'switch realiza la comparacion de la variable que se le asigna y la resuelve segun lo programado en cada uno de los casos <br><br/>';

    $valor = random_int(1,4);

    // $variable = 'valor1';

    switch ($valor) {
        case '1':
            echo 'Hace esto porque es igual al valor 1';
            break;
        
        case '2':
            echo 'Hace lo otro porque es valor 2';
            break;

        case '3':
            echo 'Hace lo otro porque es valor 3';
            break;
        
        default:
            echo "El valor random es $valor";
            break;
    
    }

?>