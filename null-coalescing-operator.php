<?php

$data = [
    "action" => NULL #ganti
];

if (isset($data["action"])){
    $action = $data["action"];
}else {
    $action = "nothing";
}

echo $action . PHP_EOL;

#Null coalescing Operator
$data = [
    "action" => "create"
];
$action = $data["action"] ?? "nothing";
echo $action . PHP_EOL;