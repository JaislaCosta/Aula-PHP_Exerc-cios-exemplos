<?php

//Exercício1: Calcular raiz quadrada e imprimir valor
$numero = 25;
$raiz = $numero ** 0.5;

echo "A raiz quadrada de $numero é: $raiz<br>";



//Exercício2: Calcular o valor de Delta
function calculardelta($a, $b, $c){
    $delta = ($b*$b) - (4*$a*$c);
    return $delta;
}
$delta = calcularDelta(1,(-3),2);

if ($delta > 0) {
    echo "A equação tem duas raizes reais, pois o valor de delta é: ".$delta;
    
}else {
    if ($delta == 0) {
        echo "A equação possui uma raiz real, pois o valor de delta é: ".$delta;
        
    }else{
        echo "A equação não possui raizes reais";
        
    }
    
}
echo "<br>";



//Exercício3: Calcular valor do produto com taxa alterada
$valorProduto = 100;
$taxa = 0.10;

function calcularProduto($valorProduto, &$taxa){
          $taxa = 0.15;
          $valorProduto = $valorProduto + ($valorProduto*$taxa);
          return $valorProduto;

}

echo "O valor do produto é: R$ ".calcularProduto($valorProduto, $taxa);
echo "<br>";
echo "O valor da taxa é: R$ ".$taxa*100;
echo "<br>";



//Exercício4: Verificar se o número é Par ou Ímpar
function parOuImpar($numero){

    if ($numero%2==0){
        echo "O $numero é par";
    }else{
        echo "O $numero é ímpar";        
    }
}

parOuImpar(5);
echo "<br>";



//Exercício5: Calcular Média de duas notas
function media($numero1, $numero2){

    $result = ($numero1+$numero2)/2;
    printf("A média é: %.1f", $result);
}
$num1 = 10;
$num2 = 3;
media($num1, $num2); 
echo "<br>";



//Exercício6: calcular valor com  desconto de 10% à vista
$valorOriginal = 1800;
$desconto = 0.10;

function calcularDesconto($valorOriginal, $desconto) {
    return $valorOriginal - ($valorOriginal * $desconto);
}

$result = calcularDesconto($valorOriginal, $desconto);

echo "O valor original é: R$ $valorOriginal<br>";
echo "O do desconto é de: R$ ". ($valorOriginal * $desconto) . "<br>";
echo "O valor com desconto é: R$ $result";
echo "<br>";



//Exercício7: Somar de 1 até N (recursiva)
function somar($num){
    if ($num == 1) {
        return 1;
    }
    return $num + somar($num - 1);
}
echo "A soma é: ".somar(10)."<br>";



//Exercício8: Contagem regressiva até 0 (recursiva)
function regressiva($numero){
    if ($numero < 0) return;
    echo "$numero ";
    regressiva($numero - 1);
   
}
regressiva(15);
?>