<?php

$numbers = [1,2,3];
$names = ['John', 'Jack'];

function inspect ($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

//inspect($names);

$numbers[] = 10;
unset($numbers[0]);
$numbers = array_values($numbers);
inspect($numbers);


