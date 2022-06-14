<?php

$busqueda = $_GET["buscar"];

include("conexion.php");

$consulta = "SELECT * FROM product WHERE name LIKE '%$busqueda%'";

$result = mysqli_query($conn, $consulta);

while($fila = mysqli_fetch_assoc($result)) {

  echo "<form action='actualizar.php' method='get'>";
  echo "<input type='text' name='code' value='" . $fila['ProductID'] . "' readonly /><br />";
  echo "<input type='text' name='nombre' value='" . $fila['Name'] . "' /><br />";
  echo "<input type='text' name='coste' value='" . $fila['Cost'] . "' /><br />";
  echo "<input type='text' name='precio' value='" . $fila['Price'] . "' /><br />";
  echo "<input type='submit' name='enviando'  value='Actualizar!' />";
  echo "<form>";

}

?>

</body>
</html>
