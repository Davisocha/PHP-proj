<?php 
$aluno= [
    "nome" => "joão",
    "idade"=> 20,
    "curso" => "Sistemas de informação"
];
//adicionando novo campo
$aluno["semestre"]=4;

//exibindo valores
echo "nome: ". $aluno["nome"]."<br>";
echo "Curso: ". $aluno["curso"]."<br>";



?>