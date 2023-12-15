<?php

// Arrays

/*$data = [
    'John' => [ 'Salad', 'Spaghetti' ],
    'Jane' => 'Burger',
    'Sam' => 'Pizza'
];

$data[ 'jane' ] = 'Chicken';
$data[] = 'Soup';*/

//print_r( $data[ 'John' ][ 1 ] );
//var_dump( $data )

// Typecasting

//var_dump( ( float ) $data );
// Type Juggling
// echo ( string ) 30;

/* Logical operators

$data = 5;
$permission ="admin";
$authorization = $permission === "admin" && $data = 5;

var_dump($authorization);*/

/* Force convert array into a string
@var_dump (
    (string) [1]
);*/

// Operator precedence --> see website

// Constant : const FULL_NAME

/*$nom = "John";
$prenom = "Davis";

var_dump("hello " . " " . $nom . $prenom);*/

/*$nom = "John";
$prenom = "Davis";
$message = "TEST MESSAGE ";
$message .= $nom;

var_dump($message);*/

/*function getPermission () {
    sleep(2);
    return 2;
}

$permission = getPermission();*/

///////////////////////////////////////////////

// Keep variable varlue with Static
/*function foo(){
    static $x = 1;
    return $x++;
}
echo foo() . "<br>";
echo foo() . "<br>";*/

// Anonymous function

/*$multiply = function ($num) use ($multiplier) {
    $multiplier = 5;
    echo $num;
    echo "<br>";
    return $num * $multiplier;
};*/

/*$multiplier = 2;

$multiply = fn ($num) => $num * $multiplier;

function sum($a, $b, $callback) {
    return $callback($a + $b);
};


echo sum(5,2,$multiply);;*/


/////////////// Arrays //////////////

/*$users = ['John', 'Jane', 'Bob'];

// Filtering values
$users = array_filter($users, fn($users) => $users !== 'Bob');

echo "<pre>";
print_r($users);
echo "<pre>";*/


/* Exercices
function colorCode(string $color) : int {
    $colorArray = array("Red" => 1, "Blue" => 2);
    echo $colorArray[$color];
    return $colorArray[$color];
}

colorCode("Red");*/

/* Destructuring arrays

$nums = ['example' => 5, 3, 9, 11];
 
['example' => $a, 0 => $b] = $nums;

echo $nums['example'];*/

////////// OOP ///////////

require_once 'Account.php';

$myAccount = new Account;

$myAccount->balance = 20;

var_dump($myAccount->balance);
echo '<br>';

// Read const
var_dump(Account::NAME);
var_dump($myAccount::$count);

// Anonymous Class

class CurrentWeek {
    public \DateTime $date;
    public int $daysFrom = 0;
}

$currentWeek = new CurrentWeek();

foreach ($currentWeek as $value){
    var_dump($value);
    
}

