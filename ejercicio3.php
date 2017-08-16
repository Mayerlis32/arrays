<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>numeros orden ascendente.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">

      <?php
      $numeros=array(20, 2, 18, 10, 6, 8, 12, 4, 16, 14);
       sort($numeros);

       foreach ($numeros as $key => $value) {
         echo "numeros[". $key . "]= " . $value . "\n <br />";
       }
       ?>

    </div>


  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
