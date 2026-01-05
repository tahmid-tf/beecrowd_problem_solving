<?php
$input          = trim(fgets(STDIN));
$original_input = explode(" ", $input);
$exploded_input = explode(" ", $input);

sort($exploded_input);

for ($i = 0; $i < count($exploded_input); $i++) {
    echo $exploded_input[$i] . PHP_EOL;
}

echo PHP_EOL;

for ($i = 0; $i < count($original_input); $i++) {
    echo $original_input[$i] . PHP_EOL;
}
