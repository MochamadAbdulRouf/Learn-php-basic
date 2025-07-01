<?php

$counter = 1;

while ($counter <= 10) {
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
    $counter++;
}

#Syntax Alternative While Loop 
$counter1 = 1;
while ($counter1 <= 10) :
    echo "hei ini adalah for loop ke-$counter1" . PHP_EOL;
    $counter1++;
endwhile;