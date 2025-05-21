<?php

for ($i=1; $i <=50; $i++) { 
          printf("Não vou mais desobedecer a professora!<br>");
}

while ($cond <= 50) {
          echo "Não vou mais desobedecer a professora!";
          echo "teste<br>";
          $cond++;
}


echo "<h2>---Tabuada 7---</h2>";
for ($nun=1; $nun <= 10; $nun++) { 
          printf("7 x %d = %d<br>", $nun,(7*$nun));
}


$alunos= array(0=>"Ana", 1=>"Bianca", 2=>"Carlos", 3=>"Daniel");
foreach ($alunos as $posicao => $nome){
          printf("A posição: %d, os alunos são: %s<br>", $posicao, $nome);
}


$numeros = array(10,17,21,8,32,41,70,45,7,9);
foreach ($numeros as $numero) {
          if ($numero > 18) {
                    printf("Numeros maiores %d<br>", $numero);

          }else {
                    printf("Numeros menores %d<br>", $numero);
          }
        }
        
?>