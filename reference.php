<?php

$name = "Rouf";
$otherName = $name;
$otherName = "Abdul";
echo $name . PHP_EOL;

// Pas By Reference
// Mengirim data ke function dengan reference

function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

#Returning References
// Namun Hati" gunakan fitur ini jika memang ada alasannya, Karena fitur ini bisa membingungkan

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;