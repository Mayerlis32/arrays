<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>numeros pares.</title>
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">

      <?php
      $numeros=array(2,10, 6, 8, 4,);
       sort($numeros);

       foreach ($numeros as $key => $value) {
         echo "numeros[". $key . "]= " . $value . "\n <br />";
       }
       ?>

    </div>

  </body>
</html>
