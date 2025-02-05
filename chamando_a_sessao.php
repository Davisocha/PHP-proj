<?php 
$servername = "localhost";
$username = "root";
$pass = "";
$database = "bd_ti97";

//criando conexão
$conn = new mysqli($servername, $username, $pass, $database);
//verificando a conexão
if($conn->connect_error){
    die("Falha na conexão".$conn->connect_error);
}

?>