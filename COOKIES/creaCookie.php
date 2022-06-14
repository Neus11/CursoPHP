<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      setcookie("idioma", $_GET["idioma"], time() + 1000);

      header("Location:ver_cookie.php");
      

    ?>

  </body>
</html>
