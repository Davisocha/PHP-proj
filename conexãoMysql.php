<?php 


//parametros

$bd = 'mysql:host=localhost;bd_ti97';//conexão com o BD
$user = 'root'; //nosso user no banco 
$pass = '';//nossa senha no banco

//conexão de fato pela classe PDO
try{
    $conn = new PDO($bd,$user,$pass);/*criando uma conexão que é uma classe do PHP, onde informamos 3 parametros, de user,senha e caminho do host*/
$query = '
use bd_ti97;
create table usuarios2(
id int not null primary key auto_increment,
nome varchar(50) not null,
email varchar(100) not null,
senha varchar(32) not null)
';

$retorno = $conn->exec($query);
echo $retorno;
}
catch(PDOException $ERRO)/*tratamento de exeção */
{
    echo "deu ERRO "."<br>".$ERRO->getMessage();/*teste de erro ou depuração*/    

}

?>