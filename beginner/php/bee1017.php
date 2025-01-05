<?php
$time = readline();
$speed = readline();

$distance = $time * $speed;

$fuel_spent = number_format($distance / 12, 3, '.', '');

echo "$fuel_spent\n";