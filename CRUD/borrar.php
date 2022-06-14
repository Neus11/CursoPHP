<?php

  include('conexion.php');

  $id=$_GET['id'];

  $base->query("DELETE FROM usuarios WHERE id='$id'");
  header('Location:index.php');

?>
