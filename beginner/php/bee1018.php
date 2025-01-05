<?php
$banknotes = [100, 50, 20, 10, 5, 2, 1];

$value = readline();

echo "$value\n";

foreach ($banknotes as $banknote) {
    $quantity = intdiv($value, $banknote);

    $value = $value % $banknote;

    echo "$quantity nota(s) de R$ $banknote,00\n";
}