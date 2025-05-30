<?php
/*
//PHP parte 6:
//Função para contar caracteres
echo strlen("Brasília patrimônio da humanidade!");
echo "<br><br>";

//Função para contar palavras
echo str_word_count("Brasília é linda!");
echo "<br><br>";

//Função que procura na string um determinado caractere e retorna o valor da sua posição
echo strpos("Joao Ferreira","e");
echo "<br><br>";

//Funções para alterar a escrita da string 
echo strtoupper("eu amo programar em PHP");
echo "<br>";
echo strtolower("AGORA FAZ TODO SENTIDO!");
echo "<br><br>";

//Função para substituir caracteres em uma string
$nome = "Vasco da Gama";
echo str_replace("Vasco", "Vitorioso", $nome);
echo "<br><br>";

//Função para reverter uma string
echo strrev("Joao Silva");
echo "<br>";
//Função para remover espaços em branco de uma string
$nome = "Joao Silva";
echo trim($nome);
echo "<br><br>";

$nome1 = " Joao Silva";
$nome2 = "Paula Fernandes";
echo "<form>";
echo "<label>Nome <label>";
echo "<input type=tet nome=nome1 value='".trim($nome1)."'>";
echo "<br>";
echo "<label>Nome <label>";
echo "<input type=tet nome=nome2 value='".trim($nome2)."'>";
echo "<br><br>"; 

//Função para concatenar(juntar) strings diferentes
$ola = "Olá";
$mundo = "Mundo!";
$completo = $ola . $mundo;
echo $completo;
echo "<br><br>";

//Função para retirar a quantidade necessária de uma string
echo $y = ("Joao Celestino da Silva");
echo substr($y,9);
echo "<br><br>";

//Função para retornar qual é o tipo davariável e o valor que está atribuído a ela
$numero = 1;
$float = 1.3;
$string = "Cadeira de Caracteres";
$chamada = array("Ana", "Bruna");
TRUE;
$verdadeiro = TRUE;
$nulo = null;

var_dump($numero);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($string);
echo "<br>";
var_dump($chamada);
echo "<br>";
var_dump($verdadeiro);
echo "<br>";
var_dump($nulo);
echo "<br>";
 

 //Exercício1
 $nome = "Fernando Silva";
 echo strpos("Fernando Silva", "Silva");
 echo "<br><br>";
 //mais elaborado
 $nome1 = "Fernando Silva";
 echo strpos("Fernando Silva", "S");
 if ($nome1) {
   echo ") nome $noome foi encontrado!";
 }else {
    echo "O nome $nome NAO foi encontrado";
 }
*/
 //Exercício2
 $maiuscula = strtoupper("essa frase sera maiuscula");
 $minuscula = strtolower("ESSA FRASE E MINUSCULA");
 echo " ".$maiuscula;
 echo "<br>";
 echo " ".$minuscula;

 //Exercício3
 $frase = "Aquela Frase";
 $frase1 = str_replace("Aquela", "Essa", $frase);
 echo "<br>";
 printf("A frase alterada: $frase1");




 
?>