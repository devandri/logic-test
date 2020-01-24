<?php

function NumberSquare(int $min = 1, int $max = 12) {
    for ($i = $min; $i <= $max; $i++) {
        $i_origin = $i;
        $i_plus = $i + 4;
        echo $i_plus;
        echo "<br>";
    }
}

$min = 1;
$max = 12;
NumberSquare($min, $max);