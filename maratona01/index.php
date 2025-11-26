<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Empréstimo Bancário </h1>
    <?php

    $valoremprestimo = 2300;
    $taxaano = 1 + 0.15;
    $parcelas = 24;
    $valortotal = 110.20;

    //($valoremprestimo * $taxaano / $parcelas);
    echo "Cliente solicita um empréstimo de R$2300 dividido em 24 parcelas com taxa de juros anual de 15%";
    echo "<br>";
    echo "O valor total do empréstimo fica em $valortotal";
    ?>
     <h1> Conversor de moeda </h1>
    <?php
    
    $real = 5.33;
    $dolar = 93;
    echo "O valor de 93 dólares convertidos em reais é de ";
    echo ($dolar * $real);

    ?>
</body>
</html>