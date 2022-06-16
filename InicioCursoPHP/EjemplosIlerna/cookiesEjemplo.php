<?php
    if (!isset($_COOKIE["repeticiones"])) {
        setcookie("repeticiones", 10, time() + 5);

        echo "Creo la cookie"; 
    } else {
        echo "ya esta definida la cokkie<br>";

        $veces = $_COOKIE["repeticiones"];

        for ($i=0; $i < $veces; $i++) {
            echo "Cosa<br>";
        }
    }
?>