<?php

  require 'conexion.php';

  class DevuelveProductos extends Conexion {

    public function DevuelveProductos(){

      parent::__construct();

    }

    public function get_productos(){

      $result = $this->conexion_db->query('SELECT * FROM product');

      $productos = $result->fetch_all(MYSQLI_ASSOC);

      return $result;

    }

  }

?>
