<?php

$number1 = 2;
$number2 = 10;
$number3 = 11;
$number4 = 12;
$number5 = 15;
$number6 = 19;

//echo sum($number1, $number2);
//space();
sumAndSpace($number1, $number2);
//echo sum($number3, $number4);
//space();
sumAndSpace($number3, $number4);
//echo sum($number5, $number6);
//space();
sumAndSpace($number5, $number6);
sumAndSpace(9, 99);

function sum($number1, $number2) { // geriye değer döndüren fonksiyon
    return $number1 + $number2;
}

function space() { // void fonksiyon
    echo '<br>';
}

function sumAndSpace($n1, $n2) {
    echo sum($n1, $n2);
    space();
}