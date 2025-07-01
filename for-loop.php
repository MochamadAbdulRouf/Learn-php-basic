<?php
$counter1 = 1;
for ( ; $counter1 <= 10 ;){
    echo "ini adalah for loop ke-$counter1" . PHP_EOL;
    $counter1++;
}

#perulangan dengan init statement
for ($counter = 1; $counter <= 10;) {
    echo "hello for loop : " . $counter . PHP_EOL;
    $counter++;
}

#perulangan dengan post statement
for ($counter = 1; $counter <= 10; $counter++) {
    echo "hello for loop : " . $counter . PHP_EOL;
}

for ($counter = 10; $counter >= 1; $counter--) {
    echo "hello for loop : " . $counter . PHP_EOL;
}

#Syntax alternative for loop 
for ($counter = 1; $counter <= 10; $counter++) :
    echo "Hei for loop : " . $counter . PHP_EOL;
endfor;

for ($counter = 10; $counter >= 1; $counter--) :
    echo "Hei for loop : " . $counter . PHP_EOL;
endfor;