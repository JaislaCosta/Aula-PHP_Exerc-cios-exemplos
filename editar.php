<?php
//Variáveis para salvar os dados de acesso ao Banco de Dados
$host = 'localhost';
$dbname = 'cadastroBD';
$user = 'root';
$pass = '';

try {
    //Criar a conexão com o banco de dados
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_SERVER['REQUEST_METHOD']=='POST'){
        //Armazenando as variáveis
        $id = $_GET['id'] ?? '';
        $nome = $_GET['nome'] ?? '';
        $email = $_GET['email'] ?? '';

        //Passa as instruções do SQL
        $sql = "UPDATE pessoas SET nome=:nome, email = :email WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id); 
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        //Enviar mensagem de sucesso na alteração
        echo "<p>Dados atualizados com sucesso!</p><br>";
        echo "<a href='cadastro.html'>Voltar a página inicial</a>";

    }else{
        echo "<p>Use o método POST para atualizar os campos: id, nome e email</p>";
    }

    }catch (PDOException $erro){
        die("Erro na conexão com o BD ". $erro->getMessage());
    }
    
?>