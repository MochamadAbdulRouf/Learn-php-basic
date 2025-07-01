<?php 

#Tipe Data Array
$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Mochamad", "Abdul", "Rouf"];
var_dump($names);

//OPERASI ARRAY
# $array[index] // mengakses data di array pada nomor index
# $array[index] = value // mengubah data di array pada nomor index dengan value baru
# array[] = value // menambahkan data baru di akhir array
# unset($array[index]) // menghapus data di array, index otomatis hilang dari array
# count($array) // mengambil total data di array

$names[0] = "Rafa";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Myz";
var_dump($names);

var_dump(count($names));

#Membuat Map Array

$rouf = array(
    "id" => "Rouf",
    "name" => "Mochamad Abdul Rouf",
    "age" => 18
);
var_dump($rouf);
var_dump($rouf["name"]);

$rafa = [
    "id" => "Rafa",
    "nama" => "Nabila Rafa Assanti Sabikhah",
    "age" => 14
];
var_dump($rafa);

#Array dalam Array

$myzuqe = array(
    "id" => "myzuqe",
    "name" => "myzuqe cool",
    "age" => 18,
    "address" => array(
        "city" => "Blitar",
        "country" => "Indonesia"
    )
);
var_dump($myzuqe);
var_dump($myzuqe["address"]["country"]);

#Array dalam Array v2

$zuqe = array(
    "id" => "zuqe",
    "name" => "zuqe cool",
    "age" => 18,
    "address" => [
        "city" => "Blitar",
        "country" => "Indonesia"
    ]
);
var_dump($zuqe);
var_dump($zuqe["address"]["city"]);