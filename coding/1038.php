<?php

$products = [
    ['code' => 1, 'name' => 'Cachorro Quente', 'price' => 4],
    ['code' => 2, 'name' => 'X-Salada', 'price' => 4.5],
    ['code' => 3, 'name' => 'X-Bacon', 'price' => 5],
    ['code' => 4, 'name' => 'Torrada Simples', 'price' => 2],
    ['code' => 5, 'name' => 'Refrigerante', 'price' => 1.5],
];

$code = explode(" ", fgets(STDIN));

echo "Total: R$ " . number_format($products[$code[0] - 1]['price'] * $code[1], 2, '.', '') . "\n";
