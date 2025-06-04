<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nome</label><br>
        <input type="text" name="nome">
        <input type="submit" name="enviar" value="Enviar">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $nome = htmlentities($_POST["nome"]);
    echo "O nome digitado foi: ".$nome;
    
}
?>
</body>
</html>