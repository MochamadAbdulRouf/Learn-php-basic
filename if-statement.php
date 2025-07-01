<?php

$nilai = 60;
$absen = 90;

#if statement
if ($nilai >= 75 && $absen >= 75){
    echo "Selamat anda lulus" . PHP_EOL;
} else{
    echo "Maaf anda tidak lulus" . PHP_EOL;
}

#if and else
if ($nilai >= 80 && $absen >= 80){
    echo "Nilai anda A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70){
    echo "Nilai anda B" . PHP_EOL;
} else if ($nilai >= 68 && $absen >= 60){
    echo "Nilai anda C" . PHP_EOL;
} else if ($nilai >= 50 && $absen >= 50){
    echo "Nilai anda D" . PHP_EOL;
} else {
    echo "Nilai anda E" . PHP_EOL;
}

#Syntax Alternatif
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai anda A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai anda B" . PHP_EOL;
 elseif ($nilai >= 68 && $absen >= 60):
    echo "Nilai anda C" . PHP_EOL;
 elseif ($nilai >= 50 && $absen >= 50):
    echo "Nilai anda D" . PHP_EOL;
 else :
    echo "Nilai anda E" . PHP_EOL;
endif;

