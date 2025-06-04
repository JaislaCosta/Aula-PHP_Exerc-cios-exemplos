<?php
//Recebe as informações do HTML
/*
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $nome = htmlentities($_POST["nome"]);
    $sobrenome = htmlentities($_POST["sobrenome"]);
    $endereco = htmlentities($_POST["endereco"]);
    $CEP = htmlentities($_POST["CEP"]);
    $email = htmlentities($_POST["email"]);

    echo "O nome digitado foi: ".$nome,"<br>";
    echo "O sobrenome digitado foi: ".$sobrenome,"<br>";
    echo "O endereco digitado foi: ".$endereco,"<br>";
    echo "O CEP digitado foi: ".$CEP,"<br>";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        printf("O $email informado é válido");
    }else {
        printf("O %s informado NAO é válido!",$email);
    }
    
}
*/

//Fazer a impressão dos dados enviados no formulário
echo "<h2>Linguagens escolhidas</h2>";
foreach ($_POST['linguagens'] as $linguagem => $value) {
    $linguagem = htmlentities($linguagem);
    echo "$linguagem<br>";
   
}
?>