<?php

  
  if(isset($_POST["enviando"])) {

    $usuario = $_POST["nombre_usuario"];
    $edad = $_POST["edad_usuario"];

    if($usuario=="Juan") {

      echo "Puedes entrar";

    } else {
      echo "No puedes entrar";
    }
  }


?>