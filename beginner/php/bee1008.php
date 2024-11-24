<?php
$id = readline();
$worked_hours = readline();
$hourly_salary = readline();

$salary = number_format($worked_hours * $hourly_salary, 2, ".", "");

echo "NUMBER = $id\n";
echo "SALARY = U$ $salary\n";