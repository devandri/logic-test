<?php
function NumberTriangle(int $min = 1, int $max = 8) {
    for ($i = $min; $i <= $max; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
}

$min = 1;
$max = 8;
NumberTriangle($min, $max);
?>