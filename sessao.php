<?php
//Exemplo de sessões
session_start();
$_SESSION['usuário'] = 'Maria';
echo "Sessão está iniciada!";
echo "<a href='receberSessao.php'>Página de Login</a>"
?>