<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Datos.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">

      <?php
      $datos=array('Pedro Torrez', 'Calle 20', '1425698');

      list($nombre,$direccion,$telefono)=$datos;
      echo "$nombre <br / > $direccion <br / > $telefono";
       ?>

    </div>


  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
