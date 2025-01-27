<?php 
$cores = [
    "vermelho","azul", "verde","amarelo","roxo"
];
//removendo o primeiro elemento 
array_shift($cores);
print_r($cores);
//removendo o ultimo elemento
array_pop($cores);
print_r($cores);

?>