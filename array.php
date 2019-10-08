<?php

//ARRAY CON ARRAY DE UNA DIMENSION DENTRO CON LOS DIAS DE LA SEMANA Y E LA OTRA POSICION CON LAS HORAS DE CADA MODULO DE NUESTRO HORARIO

$array = array("Lunes"=> array("HLC", " DWES", "DWES", "RECREO", "DWEC", "DWEC", "DAW"), 
               "Martes"=> array("DWES", " DWES", "DAW", "RECREO", "DAW", "EIE", "EIE"),
               "Miercoles"=> array("DIU", " DIU", "DWES", "RECREO", "DWES", "HLC", "HLC"),
               "Jueves"=> array("DIU", " DIU", "DWEC", "RECREO", "DWEC", "EIE", "EIE"),
               "Viernes"=> array("DWES", " DWES", "DWEC", "RECREO", "DWEC", "DIU", "DIU")

            );



//IMPRIMIR HORARIO EN UNA TABLA
print_r("<table border='3'>
<tr>");
foreach ($array as $key => $value) {
    print_r(" <th>".$key."</th>");
}
for ($i=0; $i <= 6 ; $i++) { 
    print_r("<tr>");
foreach ($array as $key => $value) {
    print_r("<td>".$array[$key][$i]."</td>");
}
print_r("</tr>");
}

print_r("</table>");

echo gettype($array);

$foo= "blas";
$blas= true;
$tontin= NULL;

settype($foo, 'integer');
settype($blas,'string');

echo gettype($blas);

echo isset($blas);
var_dump(isset($tontin));

unset($tontin);


$array2= array();

var_dump(empty($array2));


define("BLAS", "HOLA BLAS");
echo BLAS;

?>