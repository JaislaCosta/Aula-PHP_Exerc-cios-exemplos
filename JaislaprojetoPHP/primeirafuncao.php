<?php
//Função que recebe parâmetros para soma
function somarNumeros($numero1, $numero2){
          return $total =$numero1+$numero2;
          //printf("A soma dos números: %d e %d é igual: %d", $numero1, $numero2, $total);
}

//$numero1 =1;
//$numero2 =2;

$total = 2 * somarNumeros(10, 3);
echo "Total após a multiplicação: ".$total;
?>