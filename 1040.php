<?php

$input_value     = trim(fgets(STDIN));
$exploded_values = explode(" ", $input_value);

$v1 = floatval($exploded_values[0]);
$v2 = floatval($exploded_values[1]);
$v3 = floatval($exploded_values[2]);
$v4 = floatval($exploded_values[3]);

$raw_avg = ($v1 * 2 + $v2 * 3 + $v3 * 4 + $v4 * 1) / 10;
$avg     = round($raw_avg, 1, PHP_ROUND_HALF_DOWN);

echo "Media: " . number_format($avg, 1, '.', '') . "\n";

if ($avg >= 7.0) {
    echo "Aluno aprovado.\n";
} elseif ($avg >= 5.0) {
    echo "Aluno em exame.\n";

    $exam = floatval(trim(fgets(STDIN)));
    echo "Nota do exame: " . number_format($exam, 1, '.', '') . "\n";

    $final = round((($avg + $exam) / 2), 1, PHP_ROUND_HALF_DOWN);

    if ($final >= 5.0) {
        echo "Aluno aprovado.\n";
    } else {
        echo "Aluno reprovado.\n";
    }

    echo "Media final: " . number_format($final, 1, '.', '') . "\n";
} else {
    echo "Aluno reprovado.\n";
}
