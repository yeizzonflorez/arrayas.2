<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ejercicio4</title>
  </head>
  <body>
<div class="container">
  <h3>rellene un array con los numeros pares compredidos entre 1 y 10
  y los muestre en pantalla de forma asendente</h3>
  <?php
$numeros = array( 2,4,6,8,10);
print_r ($numeros);
echo "_____________________________________________________________________________";
sort($numeros);
foreach ($numeros as $key => $value) {
echo "numeros[".$key."]=".$value."</br>";
}

   ?>
</div>
  </body>
</html>
