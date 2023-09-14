<?php

$variable = 9;

if($variable == 10) {
    echo 'eşit';
} else if ($variable < 10){
    echo 'küçük';
} else {
    echo 'büyük';
}

echo '<br>';

if(9 === '9') {
    echo 'eşit';
}else {
    echo 'eşit değil';
}

echo '<br>';

if(9 !== '9') {
    echo 'true';
}else {
    echo 'false';
}