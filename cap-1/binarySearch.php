<?php

function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        $guess = $arr[$mid];
        if ($guess === $target) {
            return $mid;
        } elseif ($guess < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return null;
}

$list = [1, 3, 5, 7, 9];

echo binarySearch($list, 3);
echo binarySearch($list, -1);
