<?php
$f=6;
function recursivaFactorial($f){
    if($f!=0){
        echo ("\n".($f * recursivaFactorial($f-1)));   
    }else{
        return;
    }
}
recursivaFactorial($f);


//texto saludo como argumento y el nobre de la persona a la que se saluda, si la llamamos sin parametro dice hola, si se le pasa dice buenos dias
$saludo="Zaludos";
$nombre="makina";
function saludo($saludo="Hola", $nombre=""){
    echo ("\n".$saludo." ".$nombre);
}
saludo();
saludo($saludo, $nombre);

$precio=20;
$iva=0.3;
function precio($precio, $iva=0.21){
    $total=($precio*$iva+$precio);
    return $total;
}
echo(precio($precio));
echo(precio($precio, $iva));


$n1=2;
$n2=4;
$n3=6;
$n4=15;
function suma(...$numeros){
    $arr= [0,0];
    foreach ($numeros as $numero) {
        if($arr[1] < $numero){
            $arr[1]=$numero;
        }
        if($arr[0] == 0){
            $arr[0]=$numero;
        }else if($arr[0] > $numero){
            $arr[0]=$numero;
        }
    }
    echo ("\n".$arr[0]." ".$arr[1]);
}
suma($n1,$n2,$n3,$n4);

$n1=2;
$n2=4;
$n3=6;
$n4=15;
function sumatorio(&$suma,...$numeros){ //por referencia
    $suma=0;
    foreach ($numeros as $numero) {
        $suma+=$numero;
    }
    
}
sumatorio($resultado,$n1,$n2,$n3,$n4);
echo $resultado;



$arr= array(1,3,4,5,7,13,12);
//$token=12;

function sumaHasta($arr, $token){
    //FUNCION QUE SUME UN ARRAY HASTA ENCONTRAR EL TOKEN
    $sum=0;
    while(current($arr) != $token){
        $sum += current($arr);
        next($arr);
    } 
    return array($sum, key($arr));
}


print_r(sumaHasta($arr,13));
//echo $_SERVER['SERVER_NAME'];
?>
