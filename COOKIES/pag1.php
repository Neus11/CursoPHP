<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(isset($_COOKIE["idioma"])){
        if($_COOKIE["idioma"] == "es"){
          header("Location:español.php");
          } elseif ($_COOKIE["idioma"] == "en"){
          header("Location:english.php");
        }
      }

    ?>
    <table width="25%" align="center">
      <th colspan="2" align="center"> Elige idioma </th>
      <tr>
        <td align="center"><a href="creaCookie.php?idioma=es"><img src="img/logo.png"  width="90" height="60"> Español </a></td>
        <td align="center"><a href="creaCookie.php?idioma=en"><img src="img/palas_portada.jpg" width="90" height="60" > English </a></td>
      </tr>
    </table>

  </body>
</html>
