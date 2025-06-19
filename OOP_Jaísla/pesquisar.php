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

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT *  FROM pessoas WHERE id = :id";
        $stmt= $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $pessoa = $stmt->fetch(PDO::FETCH_ASSOC);

        if($pessoa){
            echo "<p>O id: {$pessoa['id']}</p><br>";
            echo "<p>O nome: {$pessoa['nome']}</p><br>";
            echo "<p>O email: {$pessoa['email']}</p><br>";
            echo "<p><a href='formularioCrud.html'>Voltar para a página inicial</a></p>";
        }else {
            echo "<p>Não existe dados de busca!</p>";
        }
    }else {
        echo "<p>Dados vazios ou inexistentes</p>";
        }
    }catch(PDOException $erro){
        die("Erro na conexão...".$erro->getMessage());
    } 
?>