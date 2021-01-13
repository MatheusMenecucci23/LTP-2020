<?php
$distancia = $_POST["distancia"];
$consumo = $_POST["consumo"];
$tipo = $_POST["tipo"];

$preco_gas = 4.5;
$preco_al = 3.5;
$preco_diesel = 4.3;


if($tipo=="gasolina"){
    $calculo_gasto = number_format(($distancia/$consumo)* $preco_gas,2,",",".");
    echo "Você gastará ".$calculo_gasto." reais de gasolina";
}
elseif($tipo=="alcool"){
    $calculo_gasto = number_format(($distancia/$consumo)* $preco_al,2,",",".");
    echo "Você gastará ".$calculo_gasto." reais de álcool";
}
elseif($tipo=="diesel"){
    $calculo_gasto = number_format(($distancia/$consumo)* $preco_diesel,2,",",".");
    echo "Você gastará ".$calculo_gasto." reais de diesel";
}
?>


