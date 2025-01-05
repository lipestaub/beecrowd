<?php
$input = explode(" ", readline());

$a = $input[0];
$b = $input[1];
$c = $input[2];
$d = $input[3];

if (($b > $c) && ($d > $a) && (($c + $d) > ($a + $b)) && ($c > 0) && ($d > 0) && ($a % 2 == 0)) {
    echo "Valores aceitos\n";
}
else {
    echo "Valores nao aceitos\n";
}