<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_COOKIE["prueba"])){
        echo $_COOKIE["prueba"];
      } else {
        echo "Error de cookie";
      }
    ?>

  </body>
</html>
