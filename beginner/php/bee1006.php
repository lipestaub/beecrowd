<?php
$a = readline();
$b = readline();
$c = readline();

$average = number_format((($a * 2) + ($b * 3) + ($c * 5)) / 10, 1, ".", "");

echo "MEDIA = $average\n";