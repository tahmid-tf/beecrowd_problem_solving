<?php

function trigger()
{
    $input = trim(fgets(STDIN));
    $data  = explode(' ', $input);

    if ($data[0] == $data[1]) {
        return [];
    }

    $result = trigger();
    array_unshift($result, $data);
    return $result;
}

$data = trigger();

for ($i = 0; $i < count($data); $i++) {
    if ($data[$i][0] > $data[$i][1]) {
        echo "Decrescente" . PHP_EOL;
    } else {
        echo "Crescente" . PHP_EOL;
    }
}
