<?php
function getMaleNames($filePath) {
    if (file_exists($filePath)) {
        $maleNames = json_decode(file_get_contents($filePath), true);
        if (!is_array($maleNames)) {
            $maleNames = [];
        }
    } else {
        $maleNames = [];
    }
    return $maleNames;
}
function getFemaleNames($filePath) {
    if (file_exists($filePath)) {
        $femaleNames = json_decode(file_get_contents($filePath), true);
        if (!is_array($femaleNames)) {
            $femaleNames = [];
        }
    } else {
        $femaleNames = [];
    }
    return $femaleNames;
}
?>
