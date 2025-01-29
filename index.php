<?php 
function calcularRaiz($numero){
//verifica se o numero é não negativo
if ($numero <0 ){
    return "insira um numero não negativo";
}    
//calcula a raiz usando a função sqrt
$raizQuadrada = sqrt($numero);
//arredonda para duas casas decimais 
$raizArredondada = round($raizQuadrada,2);
return $raizArredondada;
}
$numero = 10;
$resul = calcularRaiz($numero);
echo "A raiz quadrada de $numero é $resul";

//resultado da função 
/*A raiz quadrada de 10 é 3.16*/
    ?>
    