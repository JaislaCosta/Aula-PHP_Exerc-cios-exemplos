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
    //3 - Preparar e executar os dados enviados pelo HTML
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
    //4 - Prepara os dados para inserção no Banco de Dados
    $sql = "INSERT INTO pessoas (nome, email) VALUES (:nome, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    //5 - Enviar mensagem de sucesso para o navegador
    echo "<p>Dados Cadastrados com Sucesso!</p>";
    echo "<p><a href='formularioCrud.html'>Voltar a Página Inicial</a></p>";
    }else{
        //6 - Enviar mensagem de erro ao cadastrar
        echo "<p>Dados NAO Cadastrados!</p>";
    echo "<p><a href='formularioCrud.html'>Voltar a Página Inicial</a></p>";
    }
} catch (PDOExcepition $erro) {
    die("Erro de conexão...".$erro->getMessage());
    
}
?>