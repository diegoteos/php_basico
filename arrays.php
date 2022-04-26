<?php

    $array = [];
    $array2 = array();
    $array3 = ["PHP", "PYTHON", "JAVA"];
    $array4 = array("Diego", "Jose", "Fernando");

    $array5 = array(
        'titulo'=>'Aprende PHP',
        'autor'=>'Zend Editors'
    );

    $array6 = [
        'titulo'=>'Aprende PHP',
        'autor'=>'Zend Editors'
    ];


    $array3[1] = "JAVASCRIPT";  // cambiamos el valor del indice 1
    //echo $array3[1].'<br/>  ';
    //var_dump($array3);

    $array4 [] = "Diego";
    $array4 [] = "Mariano";
    $array4 [] = "Alonzo";
    $array4 [] = "Ruby";
    $array4 [] = "Joel";
    $array4 [] = "Marina";
    $array4 [] = "Pablo";
    $array4 [] = "Fernanda";
    $array4 [] = "Ruby";
    $array4 [] = "Joel";
    $array4 [] = "Marina";
    $array4 [] = "Pablo";
    $array4 [] = "Mariano";
    $array4 [] = "Fernanda";
    $array4 [] = "Ruby";
    $array4 [] = "Joel";
    $array4 [] = "Marina";
    $array4 [] = "Pablo";

    //var_dump($array4);

    $total = sizeof($array4);   // OBTENEMOS EL TAMAÑO DEL ARRAY Y CON ESTO LA METEMOS A UNA VARIABLE

    '<br><br/>';

    $i = 0;
    while ($i <=$total-1){      // CON LA VARIABLE CREADA YA PODEMOS HACER QUE LA LECTURA DEL ARRAY SEA COMPLETO SEGUN SU TAMAÑO    
        echo $array4[$i].'<br/>';
        $i++;
    }

   $buscar = in_array('Diego',$array4); // busca si existe dentro de un array determinado elemento y devuelve false o true
   var_dump($buscar);

   $buscar2 = array_search('Marina', $array4); // busca si existe dentro de un array determinado elemento y devuelve el indice
   var_dump($buscar2);

   echo "<br><br><br><br/>";

    echo "ORDENEMOS NUESTROS ARRAYS <br><br/>";

    $numeros = array(56,8,54,12,1,4,78,58,99);
    sort($numeros);                             // ordena los array de mayor a menor
    var_dump($numeros);

    echo "<br><br><br><br/>";
    echo "PARA SABER CUANTOS ELEMENTOS TIENE UN ARRAYS USAMOS count<br><br/>";
    $numElementos = count($numeros);
    var_dump($numElementos);

    echo "<br><br><br><br/>";
    echo "Concatenar dos Arrays<br><br/>";
    $primerArray = array(54,8,75,44,1,25,86,32);
    $segundoArray = array('primero', 'segundo', 'tercero');
    $todos = array_merge($primerArray,$segundoArray);
    var_dump($todos);


?>