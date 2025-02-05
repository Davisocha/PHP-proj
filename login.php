<?php 
//criar a sessão
session_start();
//vamos incluir o arquivo de conexão do banco
include 'chamando_a_sessao.php';
//verificar os dados do form foram enviados via POST
if (isset($_POST['usuario']) && isset($_POST['senha'])){
    //recebe dados do form
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //monta consulta SQL
    $SQL = "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' AND SENHA = '$senha'";
    $result = $conn->query($SQL);
    //verifica que encontrou algum registro
    if($result && $result->num_rows>0){ /*ele colococa && para comparar*/ 
        $_SESSION['usuario']=$usuario;
        echo"login efetuado com sucesso "."bem vindo ".$usuario." !";
        
    }else{
        //falha 
        die("não existe esse usuario man :(");
        
    }
}
    else{
    echo "Preencha todos os campos";       
    }

?> 
