<?php
$input_1 = trim(fgets(STDIN));
$input_2 = trim(fgets(STDIN));
$input_3 = trim(fgets(STDIN));
$input_4 = trim(fgets(STDIN));

$first  = [];
$second = [];

$first_day    = explode(' ', $input_1)[1];
$hour_min_sec = explode(' : ', $input_2);

array_push($first, $first_day, $hour_min_sec[0], $hour_min_sec[1], $hour_min_sec[2]);

$first_seconds_conversion = (($first[0] * 86400) + ($first[1] * 3600) + ($first[2] * 60) + $first[3]);

$second_day         = explode(' ', $input_3)[1];
$_last_hour_min_sec = explode(' : ', $input_4);
array_push($second, $second_day, $_last_hour_min_sec[0], $_last_hour_min_sec[1], $_last_hour_min_sec[2]);

$last_seconds_conversion = (($second[0] * 86400) + ($second[1] * 3600) + ($second[2] * 60) + $second[3]);

$total_second_conversion = $last_seconds_conversion - $first_seconds_conversion;

$output_day          = ($total_second_conversion / 86400);
$output_day_reminder = ($total_second_conversion % 86400);

$output_hour          = ($output_day_reminder / 3600);
$output_hour_reminder = ($output_day_reminder % 3600);

$output_min          = ($output_hour_reminder / 60);
$output_min_reminder = ($output_hour_reminder % 60);

$output_sec = $output_min_reminder;

echo (int) $output_day . " dia(s)" . PHP_EOL;
echo (int) $output_hour . " hora(s)" . PHP_EOL;
echo (int) $output_min . " minuto(s)" . PHP_EOL;
echo (int) $output_sec . " segundo(s)" . PHP_EOL;
