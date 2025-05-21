<?php
/*function funcaoRecursiva($numero){
          if ($numero < 1) {
                    return ;
          }else{
                    echo "Teste<br>".funcaoRecursiva($numero-1);
         }
}
//echo "A função recursiva tem o valor: ".funcaoRecursiva(2);
funcaoRecursiva(3);
*/


function fatorial($numero){
          if ($numero <=1) {
                    return 1;
          }
          return $numero * fatorial($numero-1);
}
echo "O fatorial de 5 é: ".fatorial(5);

?>