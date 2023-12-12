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

$nom = "John";
$prenom = "Davis";

var_dump("hello " . " " . $nom . $prenom);

/*$nom = "John";
$prenom = "Davis";
$message = "TEST MESSAGE ";
$message .= $nom;

var_dump($message);*/