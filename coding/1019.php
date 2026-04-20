<?php

$seconds = intval(trim(fgets(STDIN)));

$hours = floor($seconds / 3600);
$minutes = floor(($seconds - $hours * 3600) / 60);
$seconds = $seconds - $hours * 3600 - $minutes * 60;

echo "$hours:$minutes:$seconds\n";

?>