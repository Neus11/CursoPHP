<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">

      <table>
        <tr>
          <td class="izq">
          UserName:</td><td class="der"><input type="text" name="login"></td></tr>
          <tr><td class="izq"> Password:</td><td class="der"> <input type="password" name="password"></td></tr>
          <tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr>
      </table>
    </form>

  </body>
</html>
