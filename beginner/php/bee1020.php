<?php
$days = readline();

$years = floor($days / 365);
$months = floor(($days % 365) / 30);
$days = ($days % 365) % 30;

echo "$years ano(s)\n";
echo "$months mes(es)\n";
echo "$days dia(s)\n";