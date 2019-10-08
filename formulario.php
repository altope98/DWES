<?php
//Hcer un formulario con un texto de entrada con el usuario y un boton de enviar y la respuesta tiene que ser un saludo
/* $nombre=$_POST["nombre"];

function saludo($nombre=""){
    echo ("\n<p>Hola, ".$nombre."</p>");
}

saludo($nombre); 

//FORMULARIO NOS HAGA CONVERSION ENTRE EURO Y LIBRA Y GUARDA LA CONVERSION EN UN ARRAY e IDENTIFICADORES DE MONEDA 
$conversion=$_POST["conversion"];
$cantidad=$_POST["cantidad"];
function conversor($conversion,$cantidad){
    $arr= array("USD/EUR"=> 0.92, "EUR/USD"=> 1.09, "LIB/EUR"=> 1.13, "EUR/LIB"=> 0.89);
    $respuesta= $cantidad*($arr[$conversion]);
    echo ("<p>".$respuesta."</p>");
}
conversor($conversion,$cantidad); 

$cantidad=$_POST["cantidad"];
$comision=$_POST["comision"];
if($comision==""){
    $comision=2;
}
function comision($cantidad, $comision){
    $porcentaje=(($comision*$cantidad)/100);
    $total=$cantidad-$porcentaje;
    echo("<p>".$total."</p>");
}
comision($cantidad, $comision); */

$nombre=$_POST["nombre"];
$modulos=$_POST["modulo"];
function asignatura($nombre,$modulos){
    echo ("<p>".$nombre."</p>");
    foreach ($modulos as $modulo) {
        echo ("<p>".$modulo."</p>");
    }
}
asignatura($nombre,$modulos);


?>