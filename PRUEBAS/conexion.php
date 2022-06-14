  <?php
    $host="localhost";
    $db="pac3_daw";
    $usuario="root";
    $pass="";

    $conn=mysqli_connect($host, $usuario, $pass);

    if (mysqli_connect_errno()) {
      echo "Fallo al conectar con la BBDD";
      exit();
    }

    mysqli_select_db($conn, $db) or die("No se encuantra la BBDD");

  ?>
