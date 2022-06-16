<?php

    session_start();

    if (!isset($_SESSION["Usuario"])) {
        $_SESSION["Usuario"] = "David";
    } else {
        $_SESSION["Usuario"] = null;
    }

    switch ($_SESSION["Usuario"]) {
        case "David":
            echo "El valor de la variable se sesions es David";
            break;
        default:
            echo "La variable de sesions no esta definida";
            break;
    }

?>