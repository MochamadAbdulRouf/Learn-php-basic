<?php

$first = [
    "first_name" => "Mochamad"
];

$mid = [
    "middle_name" => "Abdul"
];

$last = [
    "last_name" => "Rouf"
];

$full = $first + $mid + $last;
var_dump($full);

$a = [
    "first_name" => "Mochamad",
    "Last_name" => "Abdul Rouf"
];

$b = [
    "first_name" => "Abdul Rouf",
    "Last_name" => "Mochamad"
];

var_dump($a == $a);
var_dump($a === $b);

#Contoh Expression Complex
function getValue()
{
    return 100;
}

$value = getValue();
var_dump($value);

#Statement
$name = "Mochamad Abdul Rouf";
echo $name;
$date = new DateTime();

#Kode Block
$name1 = "Rouf";

function runApp($name1)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello, $name1" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}

#Dot Operator
$name2 = "Mochamad Abdul Rouf";

echo "nama : " . $name2 . PHP_EOL;
echo "nilai : " . 100 . "\n";

