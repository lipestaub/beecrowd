<?php
$r = readline();
$pi = 3.14159;

$volume = number_format((4 / 3) * $pi * pow($r, 3), 3, ".", "");

echo "VOLUME = $volume\n";