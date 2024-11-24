<?php
for ($i = 0; $i < 2; $i++) {
    $input = explode(" ", readline());

    $amount = $input[1];
    $price = $input[2];

    $total += $amount * $price;
}

$total = number_format($total, 2, ".", "");

echo "VALOR A PAGAR: R$ $total\n";