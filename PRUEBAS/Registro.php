<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registros</title>
    <style media="screen">

      h1 {
        text-align: center;
        color: #00F;
        border-bottom: dotted #0000FF;
        width: 50%;
        margin: auto;
      }

      table {
          border: 1px solid #797878;
          padding: 20px 50px;
          margin-top: 50px;
        }

        body {
          background-color: #B0E0E6;

        }

    </style>
  </head>
  <body>
    <h1> Registro Articulos </h1>
    <form name="form1 " action="Insertar.php" method="GET">
        <table border="0" align="center">
          <tr>
              <td>Codigo</td>
              <td><label for=""></label>
              <input type="text" name="cod" id="nombre"></td>
          </tr>
            <tr>
                <td>Nombre</td>
                <td><label for=""></label>
                <input type="text" name="nombre" id="nombre"></td>
            </tr>
            <tr>
                <td>Coste</td>
                <td><label for=""></label>
                <input type="text" name="coste" id="coste"></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><label for=""></label>
                <input type="text" name="precio" id="precio"></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td><label for=""></label>
                <input type="text" name="cat" id="cat"></td>
            </tr>
                <!--<td align="center"><button type="submit" name="add">Añadir</button></td>-->
                <td align="center"><button type="submit" name="add">Borrar</button></td>
                <td align="center"><input type="reset" name="borrar" id="borrar" value="Volver"></td>
            </tr>
        </table>
    </form>

  </body>
</html>
