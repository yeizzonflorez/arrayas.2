<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> ejercicio 1</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<div class="container">
    <h3>crear un array e introducir el nombre, el teledono y la direccion de la persona y los muestre  en pantalla</h3>
  <form method="post">
   <p>Su nombre: <input type="text" name="nombre" /></p>
   <p>Su telefono : <input type="number" name="telefono" /></p>
      <p>Su direccion <input type="text" name="direccion" /></p>
   <p><input type="submit" /></p>
  </form>
  <?php
  if ($_POST) {
error_reporting(0);

  $d[] = $_POST['nombre'];
  $a[] = $_POST['telefono'];
  $c[] = $_POST['direccion'];

  echo "su nombre es:    $d[0]</br>";
  echo "su telefono es:  $a[0]</br>";
  echo "su dirrecion es: $c[0]</br>";


}
   ?>
</div>


  </body>
</html>
