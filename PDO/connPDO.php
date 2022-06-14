<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    try {

      $base = new PDO('mysql:host=localhost; dbname=pac3_daw', 'root', '');
      echo "Conexion ok!";

    } catch(Exception $e) {

      die('Error: ' . $e->GetMessage());

    } finally {

      $base=null;
      
    }

    ?>

  </body>
</html>
