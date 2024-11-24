<?php
$name = readline();
$fixed_salary = readline();
$sales = readline();

$salary = number_format($fixed_salary + ($sales * 0.15), 2, ".", "");

echo "TOTAL = R$ $salary\n";