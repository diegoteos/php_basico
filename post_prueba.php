<?php

if ($_POST != null) {

  $dpi = $_POST["registered_dpi"];


  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => '...',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('registered_dpi' => "$dpi"),
    CURLOPT_HTTPHEADER => array(
      'Cookie: PHPSESSID=72lqmi7o5d2qj2r1spt15kdeh7'
    ),
  ));

  $response = curl_exec($curl);
  curl_close($curl);

  echo $response;
  /*´
if ($response != null){

  //echo strpos($response, 'BUSCANOS MUNIGUATE')."<br>";  // veo en que posicion esta este string

  //echo substr($response,5056,5058);  // imprimo esta parte del string del array 

  $esto = substr($response,5689,5690)."<br>";  // meto el string que trae datos que no me sirven en una nueva variable
 //echo "$esto";
 //echo strpos($esto, 'servicio')."<br>";  // en la nueva variable veo en que posicion esta este string que me interesa
 echo substr($esto,0,74)."<br>";  // imprimo las posiciones que me interesan segun el nuevo string
}
*/
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multas PMT</title>
</head>

<body>
  <h1>Este es sus sistema de verificacion de Multas</h1>
  <form action="post_prueba.php" method="post">

    <input type="text" name="registered_dpi" id="">
    <input type="submit" value="Enviar">

  </form><br><br>
</body>

</html>


