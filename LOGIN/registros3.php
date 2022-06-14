<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

        session_start();

        if(!isset($_SESSION["usuario"])){

          header("location: login.php");

        }
    ?>
    <h1>Bienvenidos</h1>

    <?php
      echo "Usuario: " . $_SESSION["usuario"] . " !!!";
    ?>
    <p>Esto es info solo para usuarios registrados</p>
    <p> <a href="cierre.php"> Cierre sesión </a></p>
    <a href="registros.php"> Volver </a>
  </body>
</html>
