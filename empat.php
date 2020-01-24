<?php

function bubble_sort($arr) {
    $size = count($arr) - 1;
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size - $i; $j++) {
            $k = $j + 1;
            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}

$arr = array(99, 2, 64, 8, 111, 33, 65, 11, 102, 50);

print("Before sorting");
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr = bubble_sort($arr);
print("After sorting by using bubble sort");
echo "<pre>";
print_r($arr);
echo "</pre>";