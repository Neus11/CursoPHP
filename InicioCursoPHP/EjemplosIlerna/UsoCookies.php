<?php
    $opciones = [
        'a' => "No me gusta la cola",
        'b' => "No me gusta la naranja",
        'c' => "No me gusta el limon"
    ];

    $opcionElegida = $opciones['b'];

    echo $opcionElegida . "<br>";

    setcookie("eleccion", $opcionElegida, time() + 5);

    echo "Cookie establecida";

?>