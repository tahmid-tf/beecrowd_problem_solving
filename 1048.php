<?php

$salary = trim(fgets(STDIN));

if ($salary >= 0 && $salary <= 400.00) {
    $new_salary = $salary * 1.15;
    echo "Novo salario: " . number_format($new_salary, 2, '.', '') . "\n";
    echo "Reajuste ganho: " . number_format($new_salary - $salary, 2, '.', '') . "\n";
    echo "Em percentual: 15 %\n";
} elseif ($salary >= 400.01 && $salary <= 800.00) {
    $new_salary = $salary * 1.12;
    echo "Novo salario: " . number_format($new_salary, 2, '.', '') . "\n";
    echo "Reajuste ganho: " . number_format($new_salary - $salary, 2, '.', '') . "\n";
    echo "Em percentual: 12 %\n";
} elseif ($salary >= 800.01 && $salary <= 1200.00) {
    $new_salary = $salary * 1.10;
    echo "Novo salario: " . number_format($new_salary, 2, '.', '') . "\n";
    echo "Reajuste ganho: " . number_format($new_salary - $salary, 2, '.', '') . "\n";
    echo "Em percentual: 10 %\n";
} elseif ($salary >= 1200.01 && $salary <= 2000.00) {
    $new_salary = $salary * 1.07;
    echo "Novo salario: " . number_format($new_salary, 2, '.', '') . "\n";
    echo "Reajuste ganho: " . number_format($new_salary - $salary, 2, '.', '') . "\n";
    echo "Em percentual: 7 %\n";
} else {
    $new_salary = $salary * 1.04;
    echo "Novo salario: " . number_format($new_salary, 2, '.', '') . "\n";
    echo "Reajuste ganho: " . number_format($new_salary - $salary, 2, '.', '') . "\n";
    echo "Em percentual: 4 %\n";

}
