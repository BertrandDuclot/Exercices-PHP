<?php

/*$square = function ($number) {
    return $number * $number;
};

$result = $square(5);

echo $result;*/

// Closures

/*function createCounter() {
    $count = 0;

    $counter = function() use(&$count){
        return ++$count;
    };
    
    return $counter;
}

$counter = createCounter();*/

/*echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';*/


// Callback

$numbers = [1, 2, 3];

$squaredNumbers = array_map(function($number) {
    return $number * $number;
}, $numbers);

print_r($squaredNumbers);

function applyCallback($callback, $value){
    return $callback($value);
}

$double = function($number) {
    return $number * 2;
};


$result = applyCallback($double, 5);