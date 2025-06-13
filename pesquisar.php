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

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM pessoas WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $pessoa = $stmt->fetch(PDO::FETCH_ASSOC); 

            echo "Os dados são: <br>";
        foreach($pessoas as $pessoa){
            echo "$pessoa<br>";
        }
        echo "<p>dados Encontrados</p>";
        echo "<a href='cadastro.html'>Voltar pra a página de cadastro</a>";
    }else{
        echo "<p>Dados NÃO Encontrados</p>";
        }
    }catch(PDOExcepion $erro){
        die("Erro ao executar a pesquisa: ". $erro->getMessage());
    }
    
?>