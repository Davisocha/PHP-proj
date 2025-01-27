<?php 
//arrays multidimensionais
$times = [
    "time 1" => ["flamengo","curintia","palmeiras"],
    "time 2" => ["Barcelona","Real madrid","Atletico de madrid"]
];

//exibindo times brasileiros 
echo "Times brasileiros: "."<br>";
print_r($times["time 1"]);

//adicionando um novo time
$times["time 2"][]= "sevilla";
print_r($times);

//RESULTADO
// Times brasileiros:
// Array ( [0] => flamengo [1] => curintia [2] => palmeiras ) Array ( [time 1] => Array ( [0] => flamengo [1] => curintia [2] => palmeiras ) [time 2] => Array ( [0] => Barcelona [1] => Real madrid [2] => Atletico de madrid [3] => sevilla ) )
?>