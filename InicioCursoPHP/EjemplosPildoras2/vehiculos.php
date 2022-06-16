<?php

    class Coche {

        protected $ruedas;
        var $color;
        protected $motor;

        function Coche() {
            $this->ruedas=4;
            $this->color="";
            $this->motor=1600;
        }

        function get_ruedas(){
            return $this->ruedas;
        }

        function get_motor(){
            return $this->motor;
        }

        function arrancar(){
            echo "Estoy arrancando <br>";
        }

        function girar(){
            echo "Estoy girando <br>";
        }

        function frenar() {
            echo "Estoy frenando <br>";
        }

        function set_color($color_coche, $nombre_coche){
            $this->color=$color_coche;
            echo "el color de " . $nombre_coche . " es: " . $this->color . "<br>";
        }
    }

     /*$renault=new Coche();

    $mazda=new Coche();

    $seat=new Coche();

    $mazda->girar();
    echo ($mazda->ruedas) . "<br>";

    $seat->frenar();
    echo $seat->motor;

    $renault->establece_color("Rojo", "renault");
    $seat->establece_color("Aazul", "seat");*/

//-----------------------------------------------------------------------


    class Camion extends Coche {

        function Camion() { //Metodo constructor
            $this->ruedas=8;
            $this->color="gris";
            $this->motor=2500;
        }

        function establece_color($color_camion, $nombre_camion) {
            $this->color=$color_camion;
            echo "El color de " . $nombre_camion . " es: " . $this->color . "<br>";
        }

        function arrancar() {
            parent :: arrancar();
            echo "Camion arrancado";
        }
    }
?>