<?php

  try {

    $base=new PDO("mysql:host=localhost; dbname=pac3_daw", "root", "");

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("SET CHARACTER SET utf8");

    $tam_pag=3;

    if(isset($_GET["pagina"])){

      if($_GET["pagina"]==1){

        header("Location:index.php");

      } else {

        $pagina=$_GET["pagina"];

      }

    } else {

      $pagina=1;

    }

    $empezar=($pagina-1)*$tam_pag;

    $sql_total="SELECT Name, Price FROM product WHERE CategoryID = 2";

    $resultado=$base->prepare($sql_total);

    $resultado->execute(array());
    $num_filas=$resultado->rowCount();

    $total_paginas=ceil($num_filas/$tam_pag);

    echo "Numero de registros de la consulta: " . $num_filas . "<br />";
    echo "Mostramos " . $tam_pag . " registros por pagina <br />";
    echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<br />";

    $sql_limite="SELECT Name, Price, ProductID FROM product WHERE CategoryID = 2 LIMIT $empezar, $tam_pag";
    $resultado=$base->prepare($sql_limite);

    $resultado->execute(array());

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

      echo "ID: " . $registro['ProductID'] . " Nombre Articulos: " . $registro['Name'] . " Precio: " . $registro['Price'] . "<br />";
    }

  } catch(Exception $e){

    echo "Linea de error: " . $e->getLine();

  }

  //----------- Paginacion---------------------

  for($i=1; $i<=$total_paginas; $i++) {

    echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";

  }

?>
