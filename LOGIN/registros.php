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
      echo "Hola " . $_SESSION["usuario"] . " !!!";
    ?>
    <p> <a href="cierre.php"> Cierre sesión </a></p>
    <table>
      <th> Enlaces Usuarios Registrados </th>
      <tr>
        <td><a href="registros2.php">Link1</a></td>
        <td><a href="registros3.php">Link2</a></td>
      </tr>
    </table>
  </body>
</html>
