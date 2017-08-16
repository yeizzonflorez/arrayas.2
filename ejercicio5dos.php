<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>ejercicio5dos</title>
  </head>
  <body>


    <div class="container">
      <h3>array de 10 elementos</h3>
      <?php


$t = array(4,5,6,7,8,9,1,2,4,3 );
print_r ($t);
echo "_____________________________________________________________________________";
$suma=$t[0]+$t[1]+$t[2]+$t[3]+$t[4]+$t[5]+$t[6]+$t[7]+$t[8]+$t[9];
echo "la suma es  : $suma</br>";
echo "_____________________________________________________________________________";


$resta=$t[0]-$t[1]-$t[2]-$t[3]-$t[4]-$t[5]-$t[6]-$t[7]-$t[8]-$t[9];
echo "la resta es  : $resta</br>";
echo "_____________________________________________________________________________";

$multi=$t[0]*$t[1]*$t[2]*$t[3]*$t[4]*$t[5]*$t[6]*$t[7]*$t[8]*$t[9];
echo "la multiplicacion  es  : $multi</br>";
echo "_____________________________________________________________________________";

$div=$t[0]/$t[1]/$t[2]/$t[3]/$t[4]/$t[5]/$t[6]/$t[7]/$t[8]/$t[9];
echo "la division es  : $div</br>";
echo "_____________________________________________________________________________";

       ?>

    </div>

  </body>
</html>
