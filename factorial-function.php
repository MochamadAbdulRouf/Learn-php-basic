<?php

function factorialLoop(int $value): int
{
    $total = 1;

    for ($i = 1; $i <= $value ; $i++) {
        $total *= $i;
    }

    return $total;
}

var_dump(factorialLoop(5));
var_dump(1 * 2 * 3 * 4 * 5);

#Recursive function
function factorialRecursive(int $value): int
{
    if($value == 1){
        return 1;
    }
    else{
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(5));

#Factorial Recursive dapat menyebabkan error pada memory
#karena penggunaanya yang berlebihan jika recursivenya terlalu dalam
#maka akan terjadi kemungkinan memory overflow.Karena pada saat itu
#PHP akan menyimpan functionnya ke dalam stack.Jika function itu memanggil
#function lain maka stack akan menumpuk terus dan jika terlalu besar
#maka butuh konsumsi memory yang banyak dan jika sudah melewati batas
#maka akan terjadi error memory

#Error StackOverflow
function loop(int $value)
{
    if ($value == 0) {
        echo "End loop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(3000000);
#Jika data yang kita masukan cuman sekitar 10 atau 100 mungkin masih aman 
#Namun bagaimana jika 3 juta data yang kita masukan Jika device memang kuat
#maka tidak akan terjadi error, Apa output jika terjadi error?
#Output :
# PHP Fatal error: Allowed memory size of ... bytes exhausted (tried to allocate .... bytes) in your /path/