<?php

function sayHello($name = "Anonymous")
{
    echo "hello $name" . PHP_EOL;
}

sayHello("Rouf");
sayHello("Rafa");
sayHello();


#Default Argument Value
function sayHeyy($firstname, $lastname= ""){
    echo "hello $firstname $lastname" . PHP_EOL;
}

sayHeyy("Rouf");
sayHeyy("Rafa");
sayHeyy("Mochamad", "Abdul");

#Type Declaration
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

#Variable length Argument List
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

// Panggil dengan angka-angka terpisah
sumAll(1, 2, 3, 4, 5); 
sumAll(...$values);
// Output: Total 1,2,3,4,5 = 15