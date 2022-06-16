<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    include("vehiculos.php");

    $mazda=new Coche();

    $pegaso=new Camion();

    echo "El Mazada tiene " . $mazda->get_ruedas() . " ruadas<br>";
    echo "El  Pegaso tiene " . $pegaso->get_ruedas() . " ruedas<br>";

    echo "El motor del mazda es: " . $mazda->get_motor() . "cc<br>";

    //echo "El Mazda tiene " . $mazda->ruedas . " ruedas <br>";
    //echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas<br>"; //Sin utilidad con la encapsulacion

    //$pegaso-> arrancar(); //Revisar que la herencia funciona.

    $pegaso->establece_color("rojo", "Pussy Wagon");

    $pegaso->arrancar();
    
?>

    
</body>
</html>