<?php 
//parametros

$bd = 'mysql:host=localhost;bd_ti97';//conexão com o BD
$user = 'root'; //nosso user no banco 
$pass = '';//nossa senha no banco

//conexão de fato pela classe PDO
try{
    $conn = new PDO($bd,$user,$pass);/*criando uma conexão que é uma classe do PHP, onde informamos 3 parametros, de user,senha e caminho do host*/
    echo "DB OKAY";
}
catch(PDOException $ERRO)/*tratamento de exeção */
{
    echo "deu ERRO "."<br>";
    print_r($ERRO);
    

}

?>