<?php
/*
//continuação: exercício 4 e 5
$numero = 2;
$texto = "O mês e maio já foi embora!";
$falso = TRUE;
$variaveis = array("numero"=>1, "falso" =>TRUE);
var_dump($numero);
var_dump($texto);
var_dump($falso);
var_dump($variaveis);

//Cada Array é composto por dois componentes: chave e um valor
$chamada = array(0 =>"Ana Priscila", 1 => "Bianca Olivia", 2 =>"Carolina Silva", 3 =>"Davi Felipe", 4 =>"Eduardo Costa");
echo "$chamada[0]";

$capitas = array(0 =>"Brasília", 1 =>"São Paulo", 2 =>"Rio de Janeiro", 3 =>"Salvador");
printf("A capital do Brasil: %s",$capitais[0]);

$estados = [0=>"Ceará"];
echo "<br>";
printf("O %s fico no nordeste",$estados[0]);

//Arrays Multidimensionais (um Array dentro de outro Array)
$estados = array("Distrito Federal"=>array("capital"=>"Brasília", "população"=>"2.890.900"));
echo $estados["Distrito Federal"]["capital"];

//Criar arrays
$chamada = array();

$chamada1 = array(0=>"Bianca");
$chamada2[]= "teste";
$chamada2[1]= "teste2";

var_dump($chamada2);

//Exercício 1: Array com chave, valor
$frutas = array(0=>"Banana", 1=>"Morango", 2=>"Ameixa", 3=>"Manga", 4=>"Laranja");
echo "$frutas[2]";
//Exercício 2: Array multidimensional com dados semelhantes
$frutas = array("frutasVermelhas"=>array("morango"=>"torta", "acerola"=>"suco", "pitaia"=>"caro", "tomate"=>"molho"));
echo $frutas["frutasVermelhas"]["acerola"];
*/
//Array com os valores que vão de 0 a 6 utilizando a função range();
$facesDado = range(0,6);

foreach($facesDado as $valor) {
   printf("%d ",$valor);
}
?>