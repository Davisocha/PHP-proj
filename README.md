É um projeto em PHP, com ajuda de meus docentes para fins de Ensino!
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
   echo "Hello, World!";
print 2+2;
ambos funcionam para mostrar textos e contas na tela,

A tag <?php?> é usada para abrir e fechar um bloco de código na linguagem de programação PHP. Ela indica ao PHP quando começar e parar a interpretação do código.
echo '<h1> Olá, Mundo! </h1>';
ele reconhece o h1
    $nome = "mariana";
    echo "<h1>Olá, $nome </h1>";
ele concatena direto a variavel com $

echo("Valores das variáveis = "."".$valor."".$nome."".$preco."");
concatenação

primitivos

$verdadeiro = true;
$falso = false;
$inteiro = 1;
$decimal = 1.5;
$nome = "Davi";
$frase = "Gabriel Alter table e nicolas irmão do jorel :D";
$separador = "**************************";

Concatenação com tag
echo $verdadeiro."<br>";

Mostra o tipo da variavel
gettype($verdadeiro)."<br>";
resultado: boolean

o var_dump passa o tipo e o valor do numero de caracteres
$teste = 10;
var_dump($teste);
$teste = "nome";
var_dump($teste);

confere se o valor é true ou false 
var_dump(is_int($valor_int));