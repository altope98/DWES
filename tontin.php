<?php
$nombre = "\\Luis Manuel";
$subnormal = "eres subnormal";
$cont = 0;
/*for ($i=0; $i < 10; $i++) {
		$cont++;
		print($cont);
		echo "</br>";
	}*/
echo ("Hola $nombre, \n$subnormal");
///echo "<h1>ES LA HORA DE LAS TONTADICAS</h1>";
echo ('Esto es una comilla doble  \\ ' . "\n");
$str = <<<a
Ejemplo de una cadena
expandida en varias lineas
empleando la sintaxis heredoc.
a;
echo ("$str\n");

$arr = array(1, 2, 3, 4, 5);

//var_dump($arr);

/*for ($i=0; $i < count($arr) ; $i++) { 
	echo "$arr[$i]\n";
}*/

$array2 = array(0,1,2,3,4,5,6,7,8,9,10);


$array = [
	"cero" => 0,
	"uno" => 1,
	"dos" => 2,
	"tres" => 3,
	"cuatro" => 4,
	"cinco" => 5,
	"seis" => 6,
	"siete" => 7,
	"ocho" => 8,
	"nueve" => 9,
	"diez" => 10
];

$array_array = array(array("tontin", 2, 3), array("maricarmen", 4, 6));

$array_array2 = array(
	"luismanuel" => array(
		"tontin", 2, 3
	),
	"blas" => array(
		"maricarmen", 4, 6
	)
);

//echo("Dos + Tres = ".($array["dos"]+$array["tres"]));

echo "\n" . $array_array2["luismanuel"][0];

foreach ($array as $arr) {
	echo "\n $arr";
};

foreach ($array_array as $arr) {
	foreach ($arr as $arr2) {
		echo "\n$arr2";
	}
};

foreach ($array_array2 as $clave_array => $valor) {
	echo "\n$clave_array ";
	foreach ($valor as $clave_array2 => $datos) {
		echo "\n$clave_array2 : $datos";
	}
};

echo "\n \n";

foreach ($array as $clave => $valor) {
	echo "\n [$clave] => [$valor]";
};

for ($i=0; $i < sizeof($array2) ; $i++) { 
	 echo "\n$array2[$i]";
}

/*foreach ($array_array as $valor) {
	foreach ($valor as $valor2) {
		if($array_array[$valor][$valor2] = "maricarmen"){
			$array_array[$valor][$valor2]= "paula";
		}
	}
}*/

for ($i=1; $i ; $i++) { 	
	$array3[$i]= 0;
	echo $array3[$i];
}



echo "\n".$array_array[1][0];

$array_array[1][0]= 'paula';

echo "\n".$array_array[1][0];


