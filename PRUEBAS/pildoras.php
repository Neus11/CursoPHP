<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pruebas</title>
    <style>
      table {
        width: 50%;
        border: 1px solid red;
        margin: auto;
      }

    </style>
  </head>
  <body>

  </body>
</html>


<?php
include("conexion.php");

$consulta = "SELECT * FROM product";

$result = mysqli_query($conn, $consulta);

while($fila = mysqli_fetch_assoc($result)) {

  echo "<table><tr><td>";
  echo $fila['ProductID'] . " </td><td>";
  echo $fila['Name'] . " </td><td>";
  echo $fila['Cost'] . " </td><td>";
  echo $fila['Price'] . " </td></tr></table>";
  echo "<br>";


}


?>
