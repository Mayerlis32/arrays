<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <div class="container">
      <h3>array leer 10 numeros por teclado y mostrarlos en pantalla
        y ademas que los sume los reste los divida y los multiplique</h3>


        <?php
        $t = array(1,2,3,4,5,6,7,8,9,10);
        $r=$t[0]+$t[1]+$t[2]+$t[3]+$t[4]+$t[5]+$t[6]+$t[7]+$t[8]+$t[9];
        echo " la suma total  es  : $r</br>";
        echo "______________________________________________________</br>";
        $r=$t[0]-$t[1]-$t[2]-$t[3]-$t[4]-$t[5]-$t[6]-$t[7]-$t[8]-$t[9];
        echo " la resta total  es  : $r </br>";
        echo "______________________________________________________</br>";
        $r=$t[0]*$t[1]*$t[2]*$t[3]*$t[4]*$t[5]*$t[6]*$t[7]*$t[8]*$t[9];
        echo " la multiplicacion total  es  : $r </br>";
        echo "______________________________________________________</br>";
        $r=$t[0]/$t[1]/$t[2]/$t[3]/$t[4]/$t[5]/$t[6]/$t[7]/$t[8]/$t[9];
        echo " la division total  es  : $r </br>";
        ?>


    </div>


  </body>
</html>
