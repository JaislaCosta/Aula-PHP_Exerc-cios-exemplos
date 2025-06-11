<?php
//Verificar se a sessão está vindo com valor
session_start();
if (isset($_SESSION['usuário'])) {
    echo "Olá, usuário ". $_SESSION['usuário'];
}else "Sessão NAO inicializada.";
?>