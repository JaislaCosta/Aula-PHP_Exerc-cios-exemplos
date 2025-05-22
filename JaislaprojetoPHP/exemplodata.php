<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Data PHP</title>
</head>
<body>
    <?php
    //
    /*$data = date("F j, Y");
    print "<p>A data de hoje é: $data.</p><br>";
    print("Eu amo as férias!<br>");
    echo("Eu amo as férias!");
    print 'Vascão melhor time do mundo!'
    */

    $lutador1 = "Mike Tyson";
    $lutador2 = "Evander Holyfield";

    //echo "<p>$lutador1 e $lutador2 são luatadores de boxe</p><br>";

    /*printf ("O valor da picanha é: %d", 79);
    printf ("%d kilos de alcatra são: R$ %.2f",2, 89.70);
    
    echo "<br>"
    $var = null;
    echo $var;
    

    $verdadeiro = true;
    $falso = false;
    if($falso){
        echo "a variável é verdadeira!";

    }else{
        echo "a variável é falsa!";
    }*/

    $estado[0]= "Minas Gerais";
    $estado[1]= "Distrito Federal";
    $estado[2]= "Goiás";
    $estado[3]= "Espírito santo";

    $estado["Minas Gerais"] = "Belo Horizonte";
    $estado["Distrito Federal"] = "Brasília";

    echo $estado[0] , "tem a capital de: ",$estado["Minas Gerais"];
    ?>
</body>
</html>