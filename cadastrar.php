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

    //Receber as variáveis do formulário HTML
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome = $_SERVER['nome'] ?? '';
        $email = $_SERVER['email'] ?? '';

        //Preparar para inserir as informações no Banco de Dados
        $sql = "INSERT INTO pessoas(nome, email) VALUES (:nome, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':email',$email);
        $stmt->execute();
        //mensagem de sucesso
        echo "Dados Cadastrados com Sucesso!";
        echo "<a href='cadastro.html'>Voltar</a>";
    }else{
        echo "<p>Requisição com o Banco de Dados Falhou.</p>";
    } 

} catch (PDOException $erro) {
    //Em caso de erro emitir mensagem
    die("Erro na conexão: " .$erro->getMessage());   
}

?>