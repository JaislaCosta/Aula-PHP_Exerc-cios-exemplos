<?php
//1 - Criar variáveis para armazenar dados de acesso ao banco de dados
$host ='localhost';
$dbname = 'cadastrobd';
$user = 'root';
$pass = '';

try {
    //2 - Criar conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id = $_POST['id'] ?? '';
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';

        $sql = "UPDATE pessoas SET nome = :nome, email = :email WHERE id =:id";
        $stmt= $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        echo "<p>Dados Atualizados com Sucesso!</p>";
        echo "<p><a href='formularioCrud.html'>Voltar para a página incial</a></p>";
    }else {
        echo "<p>Dados NAO Atualizados!</p>";
        echo "<p><a href='formularioCrud.html'>Voltar para a página incial</a></p>";
    }
}catch(PDOException $erro){
    die("Erro na conexão...".$erro->getMessage());
}


?>