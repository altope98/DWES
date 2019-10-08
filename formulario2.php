
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="formulario2.php" name="input">
        Nombre:
        <input type="text" name="nombre"><br>
        Modules:
        <input type="checkbox" name="modulos[]" value="DWES">DWES
        <input type="checkbox" name="modulos[]" value="DWEC">DWEC<br>
        <input type="checkbox" name="modulos[]" value="Manolito">Manolito<br>
        <input type="submit" value="enviar">
    </form>

    <?php
    $nombre = $_POST["nombre"];
    $modulos = $_POST["modulos"];
    if(empty($modulos) && empty($nombre)){
        return;
    }else{
        echo ("<h4>Nombre:</h4>".$nombre." ");
        foreach ($modulos as $modulo) {
            echo("<h4>Modulo/modulos:<br> </h4>".$modulo."<br/>") ;
        }
    }

?>
    
</body>
</html>