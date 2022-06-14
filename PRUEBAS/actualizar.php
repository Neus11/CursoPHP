<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insertar</title>
  </head>
  <body>

    <?php
            $codigo = $_GET["cod"];
            $name = $_GET["nombre"];
            $cost = $_GET["coste"];
            $price = $_GET["precio"];


            include("conexion.php");

            //$consulta = "INSERT INTO product(Name, Cost, Price, CategoryID) VALUES('$name', $cost , $price , $category );";
            $consulta = " UPDATE product SET
                          ProductID = '$codigo', Name = '$name',
                          Cost = '$cost', Price = '$price'
                          WHERE ProductID = '$codigo'";
            $result = mysqli_query($conn, $consulta);

            /*if ($result) {
              echo 'Registro eliminado <br />';
              echo 'Registro guardado <br />';
              echo $name . '<br />';
              echo $cost . ' <br/>';
              echo $price;

            } else {
              echo 'Error en la consulta';
            }*/
            if (mysqli_affected_rows($conn) == 0) {
              echo 'No hay registros a eliminar';
            } else {
              echo 'Se ha eliminado ' . mysqli_affected_rows($conn) . 'registro';
            }

  ?>

  </body>
</html>
