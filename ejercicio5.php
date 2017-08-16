<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="style.css">
    <title>ejercicio5</title>
  </head>
  <body>
    <div class="container ">
      <h3>leer 10 numeros por teclado  y los almacene en un array los muestre y que ademas
      los sume,reste,divida y multiplique</h3>
      <form method="post">
       <p>ingrese un numero 1: <input type="number" name="numero1" /></p>
       <p>ingrese un numero 2: <input type="number" name="numero2" /></p>
       <p>ingrese un numero 3: <input type="number" name="numero3" /></p>
       <p>ingrese un numero 4: <input type="number" name="numero4" /></p>
       <p>ingrese un numero 5: <input type="number" name="numero5" /></p>
       <p>ingrese un numero 6: <input type="number" name="numero6" /></p>
       <p>ingrese un numero 7: <input type="number" name="numero7" /></p>
       <p>ingrese un numero 8: <input type="number" name="numero8" /></p>
       <p>ingrese un numero 9: <input type="number" name="numero9" /></p>
       <p>ingrese un numero 10: <input type="number" name="numero10" /></p>

       <p><input type="submit" /></p>
      </form>

      <?php
      if ($_POST) {
        error_reporting(0);
        $t=array($_POST['numero1'],$_POST['numero2'],$_POST['numero3'],$_POST['numero4'],$_POST['numero5'],$_POST['numero6'],$_POST['7'],$_POST['numero8'],$_POST['numero9'],$s_POST['numero10']);

      //la suma
      $suma=$t[0]+$t[1]+$t[2]+$t[3]+$t[4]+$t[5]+$t[6]+$t[7]+$t[8]+$t[9];
      echo "la suma total  es  : $suma</br>";
      //resta
      $resta=$t[0]-$t[1]-$t[2]-$t[3]-$t[4]-$t[5]-$t[6]-$t[7]-$t[8]-$t[9];
      echo "la  resta   total  es  : $resta</br>";

      //multiplicacion
      $mult=$t[0]*$t[1]*$t[2]*$t[3]*$t[4]*$t[5]*$t[6]*$t[7]*$t[8]*$t[9];
      echo "la multiplicaion total  es  : $mult</br>";

      //divison
      $suma=$t[0]/$t[1]/$t[2]/$t[3]/$t[4]/$t[5]/$t[6]/$t[7]/$t[8]/$t[9];
      echo "la suma total  es  : $suma</br>";
}

       ?>
    </div>

  </body>
</html>
