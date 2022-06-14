<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $conexion = new mysqli("localhost", "root", "", "pac3_daw");
      if($conexion->connect_errno){

        echo "Fallo la conexion" . $conexion->connect_errno;

      }

      //mysqli_set_charset($conexion, "utf8");
      $conexion->set_charset("utf8");
      $sql="SELECT * FROM product";

      //$resultados=mysqli_query($conexion, $sql);
      $resultados=$conexion->query($sql);

      while($fila=$resultados->fetch_assoc()){

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
