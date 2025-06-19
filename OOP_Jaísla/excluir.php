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
        $sql = "DELETE * FROM pessoas WHERE id =:id";
        $stmt= $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        echo "<p>Dados Excluídos com Sucesso!</p>";
        echo "<p><a href='formularioCrud.html'>Voltar para a página incial</a></p>";
    }else {
        echo "<p>Dados NAO Excluídos!</p>";
        echo "<p><a href='formularioCrud.html'>Voltar para a página incial</a></p>";
    }
}catch(PDOException $erro){
    die("Erro na conexão...".$erro->getMessage());
} 
    
?>