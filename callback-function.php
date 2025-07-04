<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Rouf", "strtoupper");
sayHello("Rouf", "strtolower");
sayHello("Rouf", function (string $name): string {
    return strtoupper($name);
});
sayHello("Rouf", fn($name) => strtolower($name));