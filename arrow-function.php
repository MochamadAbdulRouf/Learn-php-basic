<?php

$firstName = "Mochamad";
$lastName = "Abdul Rouf";

#Ini kalau anonymous
#sebenarnya arrow function hanya untuk menyederhanakan anonymous function
$anonymouFunction = function () use ($firstName, $lastName) : string {
     return "Hello $firstName $lastName" . PHP_EOL;
};

#ini arrow function
$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL; 

echo $anonymouFunction();
echo $anonymouFunction();

#Kesimpulan
#gunakan arrow function untuk menyederhanakan anonymous function 
