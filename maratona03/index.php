<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Tabuada </h1>
<?php
$numero = 8;

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "\n";
}
?>

<h1> Números inteiros </h1>
<?php
$numeros = [8, 15, 22, 5, 10, 30, 7, 12, 9, 20];
$soma = 0;

echo "Os números escolhidos foram: ";

for ($i = 0; $i < 10; $i++) {
    echo $numeros[$i] . " "; 
    $soma += $numeros[$i];
}

$media = $soma / 10;

echo "\n\nA média é: $media";
?>

<h1> Listas de peças </h1>
<?php
$pecas = [
    "Motor", "Pneu", "Freio", "Volante", "Câmbio", 
    "Radiador", "Bateria", "Farol", "Escapamento", "Vela"
];

foreach ($pecas as $peca) {
    echo $peca . "\n";
}
?>

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