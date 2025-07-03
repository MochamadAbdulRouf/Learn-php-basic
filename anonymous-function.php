<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello ("Mochamad");
$sayHello ("Abdul Rouf");

#Anonymous Function Sebagai Argument

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
}

sayGoodBye("Mochamad", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string{
    return strtoupper($name);
};

sayGoodBye("Rouf", $filterFunction);

#Mengakses Variable di luar Closure
#Secara default anonymous function tidak bisa mengakses variable diluar function
#Tapi kita bisa menggunakan keyword use untuk mengakses variable di luar function
$firstName = "Mochamad";
$lastName = "Abdul Rouf";

$sayHelloRouf = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloRouf();