<?php

$items = ['z','a', 'b', 'c', 'd'];

echo 'Birinci eleman: ' . $items[0];
echo '<br>';
echo 'Eleman sayısı: ' . count($items);

echo '<br>';


for ($i = 0; $i < count($items); $i++) {
    if ($items[$i] == 'a')
        echo $items[$i];
}

echo '<br>';
$numbers = [10, 20, 30, 40, 50];
$searchValues = [20, 40, 60, 70];

for ($i = 0; $i < count($searchValues); $i++) {
    if (in_array($searchValues[$i], $numbers)) {
        echo $searchValues[$i];
    }
}