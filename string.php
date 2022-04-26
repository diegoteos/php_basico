

<a href="http://php.net/manual/es/ref.strings.php<">Este es el enlace para ver mas usos de string</a> 

<?php
    $cadena = 'Hola mundo desde PHP.';
   /* echo 'La longitud de la cadena es de: '.strlen($cadena).'<br/>';

    echo $cadena.'<br/>';
    
    echo strtoupper($cadena).'<br/>';       // convierte la cadena a mayusculas


    echo strtolower($cadena).'<br/>'; // convierte la cadena a minusculas

    $cadena_modificada = str_replace('mundo', 'planeta', $cadena);  // remplaza parte de la cadena
    echo $cadena_modificada.'<br/>';

    echo strpos($cadena, 'mundo')."<br>"    // nos indica desde que posicion de la cadena esta la palabra mundo

 
*/
    echo substr($cadena,1,6);   // IMPRIMO EL STRING COMPRENDIDO DE LA POSICION 1 A LA 6

?>