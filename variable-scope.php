<?php

/*
php memiliki tiga jenis variable scope
1. Global
2. Local
3. Static
*/

/*
Global scope adalah Variable yang di buat di luar function memiliki scope global
Variable di scope global dapat hanya bisa di akses dari luar function
Artinya didalam function, kita tidak bisa mengakses variable di global scope
*/

// example
// v1 global scope
$name = "Rouf"; // global scope

function SayHii()
{
    global $name; // global keyword
    echo $name . PHP_EOL;
}

SayHii();

// v2 global scope (GLOBAL VARIABLE)
$name = "Rouf"; // global scope

function SayHii()
{
    global $name; // global keyword
    echo $name . PHP_EOL;

    var_dump($GLOBALS);
}

SayHii();

// v3 global scope (GLOBAL VARIABLE)
$name = "Rouf"; // global scope

function SayHii()
{
    global $name; // global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL;
}

SayHii();