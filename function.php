<?php
function showMinArray($array) {
    $minArray = $array[0];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $minArray) {
            $minArray = $array[$i];
        }
    }
    return $minArray;
}
function indexMinArray($array)
{
    $indexMin = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == showMinArray($array)) {
            array_push($indexMin, $i);
        }
    }
    return $indexMin;
}
