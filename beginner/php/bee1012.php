<?php
$input = explode(" ", readline());

$a = $input[0];
$b = $input[1];
$c = $input[2];

$triangle = number_format((1 / 2) * $a * $c, 3, ".", "");
$circle = number_format(3.14159 * pow($c, 2), 3, ".", "");
$trapezium = number_format((1 / 2) * ($a + $b) * $c, 3, ".", "");
$square = number_format(pow($b, 2), 3, ".", "");
$rectangle = number_format($a * $b, 3, ".", "");

echo "TRIANGULO: $triangle\n";
echo "CIRCULO: $circle\n";
echo "TRAPEZIO: $trapezium\n";
echo "QUADRADO: $square\n";
echo "RETANGULO: $rectangle\n";