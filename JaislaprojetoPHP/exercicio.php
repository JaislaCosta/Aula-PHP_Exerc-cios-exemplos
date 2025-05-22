<?php
//Criarcontagem de 0 a 50 e imprimir no navegador
$contador = 0;
while ($contador <= 50) {
    printf ("<p>contador...%d</p><br>, $contador");
    $contador++; 
}
echo "<br>";

//Criar uma lista de números ímpares de 1 até 101
$contador = 1;
while ($contador <= 10) {
    printf ("<p>contador...%d</p><br>", $contador++);
    $contador++;
    # code...
}
echo "<br>";

//Criar uma estrutura de condição com o if-else e imprimir 
//n° par se verdadeiro e ímpar se falso
$numero = 7%2;
//echo $numero;
if ($numero==0) {
    echo "<p>Número par!</p>";
    # code...
}else {
    echo "<p>Número ímpar!</p>";
    # code...
}
?>