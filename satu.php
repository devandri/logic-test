<?php
// PHP code to check wether a number is prime or Not
// function to check the number is Prime or Not
function primeCheck($number) {
    $result = '';
    if ($number == 1) {
        return "$number bukan bilangan prima";
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return "$number bukan bilangan prima";
        }

    }
    return "$number bilangan prima";

    return $result;
}

$number = 4;
echo primeCheck($number);

?>
