<?php
$array = [1, 2, 3, 4, 5, 6];

// array_map
// $mapped_array = array_map(fn($v) => $v * 2, $array);

// array_filter

// $array_filter = array_filter($array, function ($value) {
//     return $value > 2;
// });

// array_sum

// $sum_array = array_sum($array);

// var_dump($sum_array);

// ------------------------ recursion ------------------------ //

// function trigger()
// {
//     $_input = trim(fgets(STDIN));
//     $_data  = explode(' ', $_input);

//     if ($_data[0] <= 0 || $_data[1] <= 0) {
//         return [];
//     }

//     $result = trigger();
//     array_unshift($result, $_data);
//     return $result;
// }

// $data = trigger();
// var_dump($data);

// -------------------- data practice --------------------

// [$p1, $p2] = [1, 2];
// echo $p1, $p2;

// echo round(18 % 5);

// echo number_format(18 % 5, 2) . "";

// [$_line_limit, $_limit] = array_map('intval', explode(' ', trim(fgets(STDIN))));
