<?php
//Raiz quadrada forma 1
//$quadrada = pow(5,2);
//printf("A raiz quadrada de 5 é : %d", $quadrada);

//Forma 2
/*function raizNumero($numero){
    if ($numero == 0) {
        return $numero;

    }else {
        $resultado = $numero*$numero;
        return $resultado;
    }
    
}
$num = 2;
printf("A raiz quadrada do número: %d é = a %d", $num, raizNumero($num));


//Código para calcular o Delta

function calculardelta($a, $b, $c){
    $delta = ($b*$b) - (4*$a*$c);
    return $delta;
}
$delta = calcularDelta(1,(-2),1);

if ($delta > 0) {
    echo "A equação tem duas raizes reais";
    
}else {
    if ($delta < 0) {
        echo "A equação não possui raizes reais";
        
    }else{
        echo "A equação possui uma raiz real, pois o valor do delta é: ".$delta;
        
    }
    
}


//Cálculo da área de uma circunferência

function calcularArea($raio){
    define("pi",3.14);
    return pi*($raio*$raio);
}

echo "A área do círculo é: ".calcularArea(15);
*/

//

function mediaAprovacao($nota1, $nota2){
    return ($nota1+$nota2/2);
}
echo "A media do aluno é: ".mediaaprovacao(7,3);
?>