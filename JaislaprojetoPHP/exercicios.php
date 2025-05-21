<?php
/*$contador=null;
for($contador=0; $contador <=40 ; $contador++) { 
//printf(format: "<h2>Vou estudar as expressões de repetição no feriado!</h2><br>");
          $total = $contador%2;
          if ($total==0) {
                    printf(" O número %d é par!<br>", $contador);
          }else {
                    printf(" O número %d é ímpar!<br>", $contador);
          }
}*/

$listaAlunos = array("nome1"=> "Ana", "nome2"=> "Bianca", "nome3"=> "Carlos", "nome4"=> "David", "nome5"=> "Edimar", "nome6"=> "Fernando", "nome7"=> "Gabriel");
foreach ($listaAlunos as $nome=> $value) {
          printf("Os nomes são: %s<BR> na posição: %s<br>", $value, $nome);
}
?>