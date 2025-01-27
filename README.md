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

$num1 = 10;
$num2 = 5;

$adicao = $num1 + $num2;
$subtracao = $num1 - $num2;
$multiplicacao = $num1 * $num2;
$divisao = $num1 / $num2;
$resto = $num1 % $num2; 
$potenciacao = $num1 ** $num2;

echo "Adição: $adicao<br>";
echo "subtração: $subtracao<br>";
echo "Multiplicação: $multiplicacao<br>";
echo "Divisão: $divisao<br>";
echo "Resto: $resto<br>";
echo "Potenciação: $potenciacao<br>";
echo 1+1.5,"<br>";
echo var_dump(1+1.5),'<br>';//float
echo intdiv(5,2),'<br>'; // parte inteira
//A função intdiv() do PHP realiza a divisão de inteiros e retorna o quociente inteiro. 
echo round(5/2),'<br>';//arredondar

const nome = 'davi';
echo nome."<br>";
define('dudu',10.00);// ele literal, pega e declara uma const ou var dentro de aspas simples
echo dudu."<br>";

 $frutas = ["maça","banana","laranja"];
 $cores = array("vermelho","azul","amarelo");
  echo "a fruta escolhida é $frutas[1]";

 $valor = 200.50;
 echo("O preço é =".number_format($valor,2,",","."));// ele formata as casas decimais demonstradas
 echo "<br>";

IF COM AND
$a = 1;
$b = 2;
 if (($a == 1) &&/*esse é o E*/ ($b == 1))
{
    echo ("Ambos igual a 1");
}
else
{
    echo "A e B Diferentes de 1";
}

IF COM OR
$a = 2;
$b = 2;

if (($a == 1)||($b == 1))
{
    echo "a e b igual a 1";
}
else {
    echo "a e b diferentes de 1";
}

/*IF COM SWITCH OU SEJA CASE*/
$num = 40;
switch ($num) {
    case 10:
        echo "é 10";
        break;
    case 30:
        echo "é 30";
        break;
    default:
        echo "sla mané";
        break;  
    }

É assim que põem aspas duplas dentro de uma string 
    $time = "Real";
echo "O $time é \"melhor\" do mundo"; 


$num1 = 1;
while ($num1 <= 10){
    echo ("o valor de num é = ".$num1."<br>");
    $num1 ++;


  $num1 = random_int(0,10);

 echo ("A tabuada do $num1 é: ")."<br>";

 for ($i =1; $i <= 10; $i++)
{
 echo "$num1 X $i = ". ($num1 * $i)."<br>";
 
}
    <form action="">
        Tabuada do: <input type="text" name= "tab"/>
        <br>
        <input type="submit" name= "submit" value="run" />
    </form>
    <?php 
    $tabuada = $_GET['tab'];
    if ($tabuada == null)
    {
        echo "<br>"."coloque algum numero";
    }
    else{
    for ($count=1;$count <=10; $count++)
    echo $tabuada." X ".$count. " = ".($tabuada*$count)."<br>";
    }
   //array
// $dados = array("nome",1,true);
// array_unshift($dados,"TI97s");
// print_r($dados)

//array com chave
// => = operador associativo 
$array = ["a "=> 1,"b "=> 2];
print_r($array);
$array["c"]=4;  //adicona um  
print_r($array);

$array= [ 
    "nome"=>'mariana',
    "idadade" => 30,
    "cidade"=>"são paulo"
    
];
foreach($array as $chave =>$valor)
{echo "chaveeeeee: $chave, valor: $valor\n";}

//mesclar arrays
$array1 = [1,2,3];
$array2 = [5,6];

$array = array_merge($array1,$array2);print_r($array);
//
//$pessoa ['nome'=> 'mariana','idade'=>30 , 'DICUMENTOS'=> ['CPF' => 123456,'RG'=> 1234]];
//

// $TIPO = "davi";
// $bool = (boolean)$tipo;
// var_dump($bool);

------------------------------------------------
$nomes = array(                                 |
    1=>"Davi",                                  |
    2=>"Nicolas",                               |
    3=>"Gabriel"                                |
);                                              | 
echo "<pre>";                                   | 
print_r($nomes);                                | 
echo "</pre>"                                   | 
RESULTADO:                                      | 
Array                                           | 
(                                               |
    [1] => Davi                                 |         
    [2] => Nicolas                              |        
    [3] => Gabriel                              |    
)                                               |    
-------------------------------------------------

