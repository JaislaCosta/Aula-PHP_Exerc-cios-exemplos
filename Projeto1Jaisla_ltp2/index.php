<?php
//Importar a configuração do site
//require 'config.php';

//Importar o cabeçalho do site
include 'cabecalho.php';
?>
<html>
    <form action="processa.php" method="POST">
        <label for="">Nome</label><br>
        <input type="text" nome="nome"><br>
        <label for="">Email</label><br>
        <input type="email" nome="email"><br>
        <input type="submit" nome="enviar" value="Enviar">
    </form>
</html>

<?php
include 'rodape.php';
?>