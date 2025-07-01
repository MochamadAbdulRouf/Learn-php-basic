<?php

function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}

sayHello();
sayHello();

#Lokasi Function didalam if statment
$buat = true;

if ($buat) {
    function sayWhat()
    {
        echo "Hello Function sayWhat" . PHP_EOL;
    }
}

sayWhat();
sayWhat();