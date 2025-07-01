<?php

#Tipe data null
$name = "Rouf";
$name = NULL;

$age = NULL;

echo "Name : ";
echo $name;
echo "\n";

echo "age : ";
echo $age;
echo "\n";

#Mengecek apakah sebuah variable null atau tidak

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

#Menghapus sebuah variable 
$example = "Myz";
unset($example);
$example = "myz";
var_dump(isset($example));