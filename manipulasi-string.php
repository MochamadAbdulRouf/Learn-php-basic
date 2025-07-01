<?php

$name = "Mochamad Abdul Rouf";
echo "Name : " . $name . PHP_EOL;
echo "value : " . 100 . PHP_EOL;

# Koversi ke number dan sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

#Mengakses Karakter
$name = "Rouf";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;

#Variable Parsing
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

#Curly Brace
$var = "Rouf";
echo "This is {$var}s" . PHP_EOL;