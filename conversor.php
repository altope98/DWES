<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Conversor de monedas</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label>Cantidad a convertir: </label>
        <input type="text" name="cantidad">
        <select name="conversion">
            <option value="EUR">Euros</option>
            <option value="LIB">Libras</option>
            <option value="USD">Dolar</option>
        </select>
        <?php

        $tipo_convertir = $_POST["conversion"];
        $tipo_conversion = $_POST["convertido"];
        $cantidad = $_POST["cantidad"];

        if (empty($tipo_convertir) && empty($tipo_conversion) && empty($cantidad) && empty($respuesta)) {
            return;
        } else {
            function conversor($tipo_convertir, $tipo_conversion, $cantidad)
            {
                $arr = array("USD/EUR" => 0.92, "EUR/USD" => 1.09, "LIB/EUR" => 1.13, "EUR/LIB" => 0.89, "LIB/USD" => 1.23, "USD/LIB" => 0.81);
                $respuesta = $cantidad * ($arr["$tipo_convertir/$tipo_conversion"]);
                print_r("<label>= $respuesta</label>");
            }
            conversor($tipo_convertir, $tipo_conversion, $cantidad);
        }
        ?>
        <select name="convertido">
            <option value="EUR">Euros</option>
            <option value="LIB">Libras</option>
            <option value="USD">Dolar</option>
        </select><br>
        <input type="submit" value="enviar">

    </form>

    
</body>
</html>