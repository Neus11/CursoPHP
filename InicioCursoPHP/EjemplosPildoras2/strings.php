<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trabajo con Strings</title>

        <style>
            .resaltar{
                color: #f00;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
            $nombre = "Juan";
            echo "<p class='resaltar'>Frase de ejemplo</p>";
            echo "Hola $nombre <br>";

            $variable1 = "CASA";
            $variable2 = "CASA";
            
            $resultado = strcmp($variable1, $variable2);
            // echo "El resultado es " . $resultado;
            // El resultado da 1 (true) sino coincide y 0 si coinciden (false)

            if($resultado) {
                echo "No coinciden";
            } else {
                echo "Coinciden";
            }
        ?>
    </body>
</html>