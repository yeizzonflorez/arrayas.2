<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ejercicio2</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
    <h3>crear un array con los nombres y muestre el numero de elementos  que contiene el array</h3>
<?php

 $nombres=array("mirian","paula","maria","jose ","sebastian","carlos");
 shuffle($nombres);
 foreach ($nombres as $nombre) {
echo "$nombre</br>";
 }
echo count( $nombres);

 ?>
    </div>

  </body>
</html>
