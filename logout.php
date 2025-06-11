<?php
//Iniciando uma sessão
session_start();
//Desalocar
session_unset();
//Destrir a sessão
session_destroy();
if (ini_get("session.use_cookies")){
    setcookie(session_name(), "time() -42000 ,'/'");
}
echo "Sessão encerrada com sucesso!<br>";
echo "<a href='login.php'>Realizar Login Novamente</a>";
?>