<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      try{

        $base = new PDO ("mysql:host=localhost; dbname=pac3_daw", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM user WHERE email = :login AND PASSWORD = :password";

        $resultado = $base->prepare($sql);

        $login=htmlentities(addslashes($_POST["login"]));
        $password=htmlentities(addslashes($_POST["password"]));

        $resultado->bindValue(":login", $login);
        $resultado->bindValue(":password", $password);

        $resultado->execute();

        $numero_registro=$resultado->rowCount();

        if($numero_registro !=0){

          session_start();
          $_SESSION["usuario"]=$_POST["login"];

          //echo "<h2>Adelante!</h2>";
          header("location:registros.php");

        } else {

          header("location:login.php");
        }






      }catch(Exception $e){

        die("Error: " . $e->getMessage());

      }

    ?>

  </body>
</html>
