<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- Código do Caio -->
<h1> Arrays </h1>
    <?php
$gato = [
    "Nome" => "Mingau",
    "Raça" => "Siamês",
    "Idade" => "3 anos",
    "Cor" => "Branco e Bege",
    "Serviço" => "Banho e Tosa"
];

foreach ($gato as $caracteristica => $info) {
    echo $caracteristica . ": " . $info . "<br>";
}

?>

<h1> Funções </h1>
<?php
function calcularDesconto($valorCompra) {
    $valorFinal = $valorCompra * 0.85;
    
    return $valorFinal;
}

$compra = 200; 
$total = calcularDesconto($compra);

echo "Valor final com desconto: R$ " . $total;

?>

<h1> Números Primos </h1>
<?php

function verificarPrimo($numero) {
    if ($numero <= 1) {
        return "Não é primo";
    }

    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            return "Não é primo";
        }
    }

    return "É primo";
}

$numerosParaTestar = [1, 2, 3, 4, 10, 13, 17, 25, 29, 97, 100];

foreach ($numerosParaTestar as $num) {
    echo "O número $num " . verificarPrimo($num) . "<br>";
}

?>
</body>
</html>