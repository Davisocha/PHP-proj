<?php 

$numeros = [10,20,30,40,50];
//primeiro elemento
echo "primeiro elemento: ".$numeros[0]."<br>" ;
//alterando o terceiro elemento
$numeros[2]= 35;
print_r($numeros);
//Resultado

//primeiro elemento: 10
//Array ( [0] => 10 [1] => 20 [2] => 35 [3] => 40 [4] => 50 )
?>