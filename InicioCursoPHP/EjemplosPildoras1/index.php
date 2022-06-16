<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    print "<h1>Bienvenidos al curso PHP </h1><br>";
    echo "<h2>Hola Alumnos</h2><br>";

    $nombre="Juan";
    $edad=18;

    echo "El nombre del profesor es $nombre" . " y tiene " . $edad . " años. <br>";
    //Comillas simples para imprimir literalmente

    include ("prueba.php");
    
    echo "Este es el segundo mensaje <br>";
   
    dameDatos();
?>
</body>
</html>