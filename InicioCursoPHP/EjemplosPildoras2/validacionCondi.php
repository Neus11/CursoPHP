<?php

if(isset($_POST["enviando"])) {

    $edad=$_POST["edad_usuario"];

    if($edad<=18){

        echo "Eres menor de edad";

    } else if($eda<=40){

        echo "Erers joven";

    } else if($edad<=65){

        echo "Eres maduro";

    } else {

        echo "Cuidate";
    }

}
// condicion ternaria: echo $edad<18 ? "mayor de edad" : "Welcome";
?>