<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>


    <?php

    function ejecuta_consulta($labusqueda) {

            //$busqueda = $_GET["buscar"];

            include("conexion.php");

            $consulta = "SELECT * FROM product WHERE name LIKE '%$labusqueda%'";

            $result = mysqli_query($conn, $consulta);

            while($fila = mysqli_fetch_assoc($result)) {

              echo "<table><tr><td>";
              echo $fila['ProductID'] . " </td><td>";
              echo $fila['Name'] . " </td><td>";
              echo $fila['Cost'] . " </td><td>";
              echo $fila['Price'] . " </td></tr></table>";
              echo "<br>";

    }

  }

  ?>
  </head>
  <body>

      <?php
          $mibusqueda = $_GET["buscar"];

          $mipag = $_SERVER["PHP_SELF"];

          if ($mibusqueda != NULL) {

            ejecuta_consulta($mibusqueda);

          } else {

            echo ("<form action= '" . $mipag . "' method= 'GET'>
              <label>Buscar: <input type='text' name='buscar' /></label>
              <input type='submit' name='enviando' value='Dale!' />
            </form>");
          }

          ?>
  </body>
</html>
