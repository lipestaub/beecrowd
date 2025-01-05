<?php
$seconds = readline();

$hours = floor($seconds / 3600);
$minutes = floor(($seconds % 3600) / 60);
$seconds = $seconds % 60;

echo "$hours:$minutes:$seconds\n";