<?php 

$nomes = array(
    1=> "wilton",
    2=>"Luciana",
    3=> "mariana"
);
unset($nomes[3]);// ele não mostra o indice escolhidos

echo "<pre>";
print_r($nomes);
echo "</pre>";
?>