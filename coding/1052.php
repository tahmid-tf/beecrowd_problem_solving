<?php

$input = trim(fgets(STDIN));
$date = DateTime::createFromFormat('!m', $input);
echo $date->format('F') . "\n";
