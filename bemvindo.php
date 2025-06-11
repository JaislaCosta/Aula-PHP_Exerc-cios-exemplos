<?php
//Iniciando a sessão
session_start();
//Verificar se a sessão está vazia ou nula (null)
if (!isset($_SESSION['usuário'])) {
    echo "Você precisa estar logado!";
    echo "<a href='login.php'>Realizar Login</a>";
    exit;
}

echo "Bem Vindo(a) ".$_SESSION['usuário'];
echo "<a href='logout.php'>Realizar logout</a>";
?>