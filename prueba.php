<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>prueba</title>
  </head>
  <body>
    <div class="container">
      <h3>prueba de la suma</h3>
      <?php
      $a = array(2, 4, 6, 8);
      echo "sum(a) = " . array_sum($a) . "\n";

      $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
      echo "sum(b) = " . array_sum($b) . "\n";
      ?>

    </div>

  </body>
</html>
