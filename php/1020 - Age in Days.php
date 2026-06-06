<?php
$daysTotal = intval(trim(fgets(STDIN)));

$years = floor($daysTotal / 365);
$remainingDays = $daysTotal % 365;

$months = floor($remainingDays / 30);
$days = $remainingDays % 30;

echo $years . ' ano(s)' . "\n";
echo $months . ' mes(es)' . "\n";
echo $days . ' dia(s)' . "\n";
?>