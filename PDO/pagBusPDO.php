<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    /* Busqueda PDO
    $busqueda_n = $_GET["name"];
    $busqueda_c = $_GET["codigo"];*/
    $insert_c = $_GET["cod"];
    $insert_n = $_GET["nombre"];
    $insert_ct = $_GET["coste"];
    $insert_p = $_GET["precio"];
    $insert_ca = $_GET["cat"];


    try {

      $base = new PDO('mysql:host=localhost; dbname=pac3_daw', 'root', '');

      $base->exec("SET CHARACTER SET utf8");

      //$sql='SELECT Name, Cost, Price FROM product WHERE Name = :n AND CategoryID = :c';
      $sql = "INSERT INTO product (ProductID, Name, Cost, Price, CategoryID)
              VALUES (:insert_c, :insert_n, :insert_ct, :insert_p, :insert_ca)";

      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $result = $base->prepare($sql);

      //$result->execute(array(':n' =>$busqueda_n, ':c' => $busqueda_c));
      $result->execute(array(":insert_c"=>$insert_c, ":insert_n"=>$insert_n,
                        ":insert_ct"=>$insert_ct, ":insert_p"=>$insert_p, ":insert_ca"=>$insert_ca));

      /*while($registro=$result->fetch(PDO::FETCH_ASSOC)) {

        echo "Nombre Articulo: " . $registro['Name'] . " Coste: " . $registro['Cost'] .
        " Precio: " . $registro['Price'] . "<br />";

      }*/
      echo "Registro insertado";

      $result->closeCursor();


    }catch(Exception $e) {

      die('Error: ' . $e->GetMessage());

    }


    ?>

  </body>
</html>
