<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

#Penggunaan variable function
function sayHello(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Hello $finalname" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHello("Mochamad", "sampleFunction");
sayHello("Mochamad", "strtoupper");
sayHello("Mochamad", "strtolower");