<?php
//Rebendo formulário em HTML e verificando se os dados são enviados
if($_SERVER["REQUEST_METHOD"]=="POST"){
     //Array para armazenar erros
     $erros = [];

     //Verificando se chave ou valor vieram vazios ou nulos
    $nome = trim($_POST["nome"] ?? '');
    $mae = trim($_POST["mae"] ?? '');
    $pai = trim($_POST["pai"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $nascimento = trim($_POST["nascimento"] ?? '');

    if (empty($nome)) $erros[] = "Preencher o nome é obrigatório!";
    if (empty($mae)) $erros[] = "Preencher o nome mãe é obrigatório!";
    if (empty($pai)) $erros[] = "Preencher o nome pai é obrigatório!";
    elseif((empty($email)) or (!filter_var($email, FILTER_VALIDATE_EMAIL))) $erros[] = "Preencher o email ou o email não está em conformidade!";
    if (empty($nascimento)) $erros[] = "Preencher a data de nascimento é obrigatório!";
    $dataBr = date('d/m/y', strtotime($nascimento));

    if(!empty($erros)) {
    echo"<ul style ='color:red;'>";
    foreach ($erros as $erro) {
        echo "<li>".htmlentities($erro)."</li>";
    }
    echo "</ul";

    }else {
    echo "O nome é: ".htmlentities($nome),"<br>";
    echo "O mae é: ".htmlentities($mae),"<br>";
    echo "O pai é: ".htmlentities($pai),"<br>";
    echo "O email é: ".htmlentities($email),"<br>";
    echo "A data d nascimento é: ".htmlentities($dataBr);
    }
    

}else {
    echo "Não foram enviados dados!";
    
}
?>