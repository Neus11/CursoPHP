<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//Array Indexada
$semana[]="Lunes";
$semana[]="Martes";
$semana[]="Miercoles";


for ($i=0; $i<count($semana);$i++){

    echo $semana[$i] . "<br>";
}


$semana[]="Viernes"; //Agrego un elemento mas, lo pone al final

for ($i=0; $i<count($semana);$i++){

    echo $semana[$i] . "<br>";
}



//$semana=array("Lunes", "Martes", "Miercoles", "Jueves");

//echo $semana[3];

//Array asociativa

$datos=array("Nombre"=>"Juan", "Apellido"=>"Gomez", "Edad"=>25);

$datos["Pais"]="Spain"; //Añadir un elemento en un array asociativa

//echo $datos["Nombre"];

if(is_array($datos)) {

    echo "Es un array <br>" ;
} else {
    echo "No lo es <br>";
}

foreach($datos as $clave=>$valor){
echo "A $clave le corresponde $valor <br>";

}

?>
    
</body>
</html>