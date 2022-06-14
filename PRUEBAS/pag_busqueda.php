<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

$busqueda = $_GET["buscar"];

include("conexion.php");

$consulta = "SELECT * FROM product WHERE name LIKE '%$busqueda%'";

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

</body>
</html>
