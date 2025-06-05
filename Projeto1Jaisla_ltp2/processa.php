<?php
if ($_SERVER["REQUEST_METHOD"]="POST"){
    $nome = htmlentities($_POST["nome"]);
    $nome = htmlentities($_POST["email"]);

    echo "O nome é: ".$nome, "<br>";
    echo "O email é: ".$email, "<br>";
}
?>