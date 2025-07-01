<?php

$nilai = "A";

if($nilai == "A"){
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
}else if ($nilai == "B" || $nilai == "C"){
    echo "anda lulus" . PHP_EOL;
}else if($nilai == "D"){
    echo "Anda tidak lulus" . PHP_EOL;
}else{
    echo "Mungkin ada salah Jurusan" . PHP_EOL;
}

switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL;
        break;
    default:
       echo "Mungkin anda salah Jurusan" . PHP_EOL;
}