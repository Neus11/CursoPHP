<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php

    /*$palabra="JUNA";
    echo (strtolower($palabra)); Funciones predefinidas*/

    /*function suma($num1, $num2) {

        $resultado=$num1+$num2;
        return $resultado;

    }
    echo (suma(5, 7));*/

    function frase_mayu($frase, $conversion=true){
        $frase=strtolower($frase);

        if($conversion==true) {
            $resultado=ucwords($frase);
        } else {
            $resultado=strtoupper($frase);
        }
        
        return $resultado;
    }
    echo (frase_mayu("ESTO ES UNA PRUEBA", false));
?>
    
</body>
</html>