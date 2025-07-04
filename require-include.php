<?php

/*
require itu jika file yang kita ambil tidak ada maka akan terjadi error dan program berhenti
include itu jika file yang kita ambil tidak ada maka akan hanya akan memberi peringatan namun program tetap di lanjutkan 
*/

require "lib/my-function.php";
echo sayHii("Mochamad", "Abdul Rouf");

include "lib/my-function.php";
echo sayHii("Mochamad", "Abdul Rouf");

#Jangan sampai salah dalam penataan function include dan require harus di atas sebelum kode eksekusi

include_once "lib/my-function.php";
echo sayHii("Mochamad", "Abdul Rouf");
// include_once dilakukan untuk melakukan include berkali kali
// namun include biasa tidak boleh ada dalam code
