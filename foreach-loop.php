<?php

$items = ['Instagram', 'Facebook', 'X'];

// print_r($items);

foreach ($items as $index => $item) {
    echo $index . ' - ' .$item;
    echo '<br>';
}

$numbers = [2,3,5,7,10];

foreach ($numbers as $number) {
    echo $number . '*5 = '. $number * 5;
    echo '<br>';
}