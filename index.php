<?php 
$numeros = [1,4,6,9,1,5,9,12];
//ordem crecente
sort($numeros);
echo "Ordem crescente: \n";
print_r($numeros);

//ordem decrecente
rsort($numeros);
echo "Ordem decrecente:\n";
print_r($numeros);

?>