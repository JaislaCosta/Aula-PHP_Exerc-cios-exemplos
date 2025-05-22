<?php
//Vamos criar um código para uma função recursiva
//O exemplo será com fatorial

/*function fatorial($numero){
    if ($numero <=1) {
        return 1;
    }
    return $numero*fatorial($numero-1);
}
echo "O fatorial é: ".fatorial(5);


$anterior = 0;
$atual = 1;
$proximo = 1;
$posicao = 20;
for ($contador=0; $contador < $posicao;$contador++){ 
     printf("%d ",$proximo);
     $proximo = $atual+$anterior;
     $anterior = $atual;
     $atual = $proximo;
}
*/
echo "<br>";
function fibonacci($numero){
    if (($numero ==0) or ($numero ==1)) {
        return $numero;
    }
    return fibonacci($numero-1) + fibonacci($numero-2);
}
//A variável número será a posição do elemento na sequência Fibonacci
//echo "A posição na sequência Fibonacci é: ".fibonacci(6);
echo "<br>";
$posicao = 10;
printf("Sequência Fibonacci:<br> ");
for ($count=0; $count < $posicao; $count++) { 
    printf("%d, ",fibonacci($count));
}
?>