<?php

$names = ["Mochamad", "Abdul", "Rouf"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

#Kode For Each
foreach ($names as $index => $name) {
    echo "Data ke $index = $name" . PHP_EOL;
}

foreach ($names as $index => $name) {
    echo "Data $name" . PHP_EOL;
}

#Kode For Each dengan Key
$person = [
    "first_name" => "Mochamad",
    "middle_name" => "Abdul",
    "last_name" => "Rouf"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}