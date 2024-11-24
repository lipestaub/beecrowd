<?php
$distance = readline();
$consumption = readline();

$average_consumption = number_format($distance / $consumption, 3, ".", "");

echo "$average_consumption km/l\n";