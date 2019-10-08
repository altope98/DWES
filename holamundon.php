<html>
<head>
<title>Prueba de PHP</title>
</head>

<body>
	<?php 
	echo '<p>Hola Mundo </p>';
	echo $_SERVER['HTTP_USER_AGENT'];

	?>

	<?=
		'<p> Imprimir cadena</p>'
	?>

	<?php 
	$enclase= true;
	$tontin= 7E-10;
	$int=(double) $tontin;
	?>

	<?php 
	if($enclase){
		echo "En clase con Blas";
		var_dump($int);
	}else{
		echo "No estamos en clase con Blas :_____(";
	}
	?>
</body>
</html>