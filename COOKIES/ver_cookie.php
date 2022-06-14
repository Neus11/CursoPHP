<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(!$_COOKIE["idioma"]) {
        header("Location:pag1.php");
      } elseif ($_COOKIE["idioma"] == "es"){
        header("Location:español.php");
      } elseif ($_COOKIE["idioma"] == "en"){
        header("Location:english.php");
      }

    ?>

  </body>
</html>
