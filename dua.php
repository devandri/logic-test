<?php

function greates(array $nums) {
    $a = $nums;
    $b = 0;
    foreach ($a as $key => $val) {
        if ($val > $b) {
            $b = $val;
        }
    }
    return "bilangan terbesar adalah $b";
}

$bilangan = array(11, 6, 31, 201, 99, 861, 1, 7, 14, 79);

echo greates($bilangan);