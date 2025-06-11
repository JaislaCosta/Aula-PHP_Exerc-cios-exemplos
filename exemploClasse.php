<?php
class Pessoa{
    public $nome;
    private $cpf;

    public function getCPF(){
        return $this->cpf;
    }

    public function setCPF($valor){
        return $this->cpf=$valor;
    }
}
//$pessoa é uma instância da minha classe Pessoa()
$pessoa = new Pessoa();
echo "O nome é: ".$pessoa->nome="José Maria";
echo "<br>";

$pessoa->setCPF(81180283200);
echo "O meu CPF é: ".$pessoa->getCPF();
?>