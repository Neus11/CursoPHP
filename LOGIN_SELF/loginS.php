<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    if(isset($_POST["enviar"])) {

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
          //header("location:registros.php");

        } else {

          //header("location:login.php");
          echo "Error en el registro";
        }

      } catch(Exception $e){

        die("Error: " . $e->getMessage());

      }
    }
    ?>
    <h1> Introduce datos </h1>

    <?php
    if(!isset($_SESSION["usuario"])){
      include("form.php");
    } else {
      echo "Usuario: " . $_SESSION["usuario"];
    }
    ?>

    <h2> Contenido de la web </h2>

    <table width="400" border="0">
      <tr>
        <td><img src="img/img1.jpg" width="300" height="166"></td>
        <td><img src="img/img2.jpg" width="300" height="166"></td>
      </tr>
      <tr>
        <td><img src="img/img3.jpg" width="300" height="166"></td>
        <td><img src="img/img2.jpg" width="300" height="166"></td>
      </tr>
    </table>

  </body>
</html>
