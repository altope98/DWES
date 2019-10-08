<?php
//SACAR LUNES 7 DE OCTUBE
function fecha()
{
    setlocale(LC_TIME, "spanish");
    return strftime("%A, %d de %B de %Y");
}
echo (fecha());
echo ("<br>");

$date = mktime(15, 0, 0, 8, 26, 1998);
$date = getdate($date);
echo ($date["mday"] . ", " . $date["month"] . " de " . $date["year"]);

echo ("<br>");
$date1 = new DateTime("1998-08-26");
$date2 = new DateTime("2019-10-08");

$diff = $date1->diff($date2);
echo $diff->days . ' days';

function nombredia($dia = 15, $mes = 5, $year = 1926)
{
    $fecha = mktime(15, 0, 0, $mes, $dia, $year);
    echo ("<br>");
    $fecha = getdate($fecha);
    convertirFecha($fecha);
    echo ($fecha["weekday"]);
}
nombredia();

function convertirFecha($fecha){
    switch ($fecha["weekday"]){
        case "Monday":
        $fecha["weekday"]= "Lunes";
        break;
        case "Tuesday":
        $fecha["weekday"]= "Martes";
        break;
        case "Wednesday":
        $fecha["weekday"]= "Miercoles";
        break;
        case "Thursday":
        $fecha["weekday"]= "Jueves";
        break;
        case "Friday":
        $fecha["weekday"]= "Viernes";
        break;
        case "Saturday":
        $fecha["weekday"]= "Sabado";
        break;
        case "Sunday":
        $fecha["weekday"]= "Domingo";
        break;
    }

    switch ($fecha["month"]){
        case "January":
        $fecha["month"]= "Enero";
        break;
        case "February":
        $fecha["month"]= "Febrero";
        break;
        case "March":
        $fecha["month"]= "Marzo";
        break;
        case "April":
        $fecha["month"]= "Abril";
        break;
        case "May":
        $fecha["month"]= "Mayo";
        break;
        case "June":
        $fecha["month"]= "Junio";
        break;
        case "July":
        $fecha["month"]= "Julio";
        break;
        case "August":
        $fecha["month"]= "Agosto";
        break;
        case "September":
        $fecha["month"]= "Septiembre";
        break;
        case "October":
        $fecha["month"]= "Octubre";
        break;
        case "November":
        $fecha["month"]= "Noviembre";
        break;
        case "December":
        $fecha["month"]= "Diciembre";
        break;
    }
    return $fecha;
}
