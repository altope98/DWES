<?php


$variable=true;

function tipo($variable){
    echo (gettype($variable));
    return (gettype($variable));
}

$array=array("Mercedes-Benz", 'Peugeot', 123, true, 1.234);

arrayCrear($array);
function arrayCrear($r){
print_r("<table style='border:2px solid black;
border-collapse:collapse; margin:0.5rem;'>");
for ($i=0; $i <=4; $i++) { 
    print_r("<tr>");
    $con=0;
    while($con<1){
        print_r("<th align='center' style='padding:1rem;'>".gettype($r[$i])."</td>");
        print_r("<td align='center' style='padding:1rem;'>".$r[$i]."</td>");
        $con++;
    }
    print_r("</tr>");
}
print_r("</table>");
}

?>