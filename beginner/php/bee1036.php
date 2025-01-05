<?php
$input = explode(" ", readline());

$a = $input[0];
$b = $input[1];
$c = $input[2];

$delta = pow($b, 2) - 4 * $a * $c;

if ($a == 0 || $delta < 0) {
    echo "Impossivel calcular\n";
}
else {
    $r1 = number_format((-$b + sqrt($delta)) / (2 * $a), 5, '.', '');
    $r2 = number_format((-$b - sqrt($delta)) / (2 * $a), 5, '.', '');
    
    echo "R1 = $r1\n";
    echo "R2 = $r2\n";
}