<?php
//Estrutura de repetição: for
/*$kilometros =null;
for ($kilometros=1; $kilometros < 100; $kilometros++) { 
    printf ("<p>%.2f kilometro é equivalente a %.2f milhas</p><br>", 
    $kilometros ($kilometros*0.6));
    # code...
}
*/

$alunos = array("Ana", "Bianca", "Carlos", "Dionisio");
foreach($alunos as $aluno){
    printf("Os alunos da lista são: $aluno<br>");

}
?>