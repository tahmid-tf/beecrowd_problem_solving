<?php
$possible_banknotes     = [100, 50, 20, 10, 5, 2];
$possible_banknotes_map = array_map(fn($item) => $item * 100, $possible_banknotes);

$possible_coins     = [1, 0.50, 0.25, 0.10, 0.05, 0.01];
$possible_coins_map = array_map(fn($item) => $item * 100, $possible_coins);

$amount          = round(trim(floatval(fgets(STDIN)) * 100));
$original_amount = $amount;

echo "NOTAS:\n";

foreach ($possible_banknotes_map as $banknote) {
    $count  = intval($amount / $banknote);
    $amount = $amount % $banknote;
    echo "$count nota(s) de R$ " . number_format(($banknote / 100), 2, '.', '') . "\n";
}

echo "MOEDAS:\n";

foreach ($possible_coins_map as $coin) {
    $count  = intval($amount / $coin);
    $amount = $amount % $coin;
    echo "$count moeda(s) de R$ " . number_format(($coin / 100), 2, '.', '') . "\n";
}
