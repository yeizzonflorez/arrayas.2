<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ejercicio3</title>
  </head>
  <body>
    <div class="container">
      <h3>rellene un array con  los primeros 10 numeros enteros y los muestre
      en la pantalla de forma acendete</h3>
      <?php
$numeros = array(1,2,3,12,5,6,7,8,9,10);
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
