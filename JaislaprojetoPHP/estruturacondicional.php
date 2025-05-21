<?php
//Elabora uma estrutura simples de condição
echo "teste";


$condicao = false;
if ($condicao) {
          echo "<h1>Eu sou um excelente Aluno!</h1><br>";
}else echo "<h1><p>A condição é falsa!</p><h1>";


$secretNumber = 460;
$_POST['guess'] = 454;
if($_POST['guess']==$secretNumber){
          echo "<p>Parabéns</p>";
}elseif(abs($_POST['guess'] - $secretNumber) < 10){
          echo "<p>Você está próximo!</p>";
}else{
          echo "<p>Sinto muito!</p>";
}else echo "<p>Que pena, você errou!</p>";


$variable = 2;

switch ($variable) {
          case 1:
                    echo "<p>Primeiro número escolhido</p><br>";
                    break;
          case 2:
                    echo "<p>Segundo número escolhido</p><br>";
                    break;
          default:
                    echo "<p>Não foi escolhido nenhum número</p>";
                    break;
}

?>