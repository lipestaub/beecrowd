<?php
$input = explode(" ", readline());

$a = $input[0];
$b = $input[1];
$c = $input[2];

$biggest = ($a + $b + abs($a - $b)) / 2;
$biggest = $c > $biggest ? $c : $biggest;

echo "$biggest eh o maior\n";