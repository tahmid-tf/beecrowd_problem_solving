<?php

$name = strval(trim(fgets(STDIN)));
$sellers_salary = floatval(trim(fgets(STDIN)));
$total_sales = floatval(trim(fgets(STDIN)));

$commission = ($total_sales * 0.15);
$salary = $sellers_salary + $commission;
echo "TOTAL = R$ " . number_format($salary, 2, '.', '') . "\n";