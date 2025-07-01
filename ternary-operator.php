<?php

#Kode bukan ternary
$gender = "PRIA";
$hi = null;

if ($gender == "PRIA"){
    $hi = "Hi, Bro!";
} else{
    $hi = "Hi, nona!";
}

echo $hi . PHP_EOL;

#Kode ternary
$gender = "WANITA";
$hi = $gender == "PRIA" ? "Hi, Bro!" : "Hi, Nona!";

echo $hi . PHP_EOL;