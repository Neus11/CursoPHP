<?php

  require 'DevuelveProductos.php';

  $productos = new DevuelveProductos();

  $array_productos=$productos->get_productos();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      foreach($array_productos as $elemento) {

        echo "<table><tr><td>";
        echo $elemento['ProductID'] . " </td><td>";
        echo $elemento['Name'] . " </td><td>";
        echo $elemento['Cost'] . " </td><td>";
        echo $elemento['Price'] . " </td></tr></table>";
        echo "<br>";
        echo "<br>";

      }


    ?>

  </body>
</html>
