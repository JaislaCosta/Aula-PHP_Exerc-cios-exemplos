<?php
//Iniciando uma sessão no PHP
session_start();
//Atribuir um usuário na minha sessão
$_SESSION['usuario'] = 'José';
echo "Login realizado com sucesso!";
echo "<a href='bemvindo.php'>Página Inicial</a>";
?>