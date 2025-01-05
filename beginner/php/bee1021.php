<?php
$banknotes = [100, 50, 20, 10, 5, 2];
$coins = [1, 0.5, 0.25, 0.1, 0.05, 0.01];

$value = round(readline(), 2);

echo "NOTAS:\n";

foreach ($banknotes as $banknote) {
    $quantity = intdiv((int)$value, $banknote);

    $value = fmod($value, $banknote);

    echo "$quantity nota(s) de R$ $banknote.00\n";
}

echo "MOEDAS:\n";

$value = round($value * 100);

foreach ($coins as $coin) {
    $coin = $coin * 100;

    $quantity = intdiv((int)$value, (int)$coin);

    $value = $value % $coin;
    
    echo "$quantity moeda(s) de R$ " . number_format($coin / 100, 2, '.', '') . "\n";
}