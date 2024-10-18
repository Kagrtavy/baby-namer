<?php
include_once __DIR__ . '/../functions/functions.php';
$maleFilePath = __DIR__ . '/../names/male_names.json';
$femaleFilePath = __DIR__ . '/../names/female_names.json';
$maleNames = getMaleNames($maleFilePath);
$femaleNames = getFemaleNames($femaleFilePath);
$maxNames = max(count($maleNames), count($femaleNames));
?>