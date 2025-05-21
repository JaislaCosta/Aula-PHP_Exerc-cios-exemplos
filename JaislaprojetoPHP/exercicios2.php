<?PHP
//Função por referência "&"
/*$valorProduto = 100;
$lucro = 0.1;

function calcularProduto($valorProduto, &$lucro){
          $lucro = 0.15;
          $valorProduto = $valorProduto +($valorProduto*$lucro);
          return $valorProduto;

}

echo "O valor do produto é:R$ ".calcularProduto($valorProduto, $lucro);
echo "<br>";
echo "O valor do lucro é:R$".$lucro*100;



//Calcular se é Par ou Impar
function parOuImpar($numero){

          if ($numero%2==0){
                    echo "O $numero é par";
          }else{
                    echo "O $numero é ímpar";        
          }
}

parOuImpar(1);
*/

// calcular área de uma circunferência
function calcularArea($raio, $pi){

          return $pi*($raio*$raio);

}
$resultado = calcularArea(15,3.14);
printf("A área da minha circunferência é %.3f", $resultado);

?>