<?php

/*
1. join() / implode() = menggabungkan  array menjadi string
2. explode()          = memecah string menjadi array
3. strtolower()       = mengubah string menjadi lowercase
4. strtoupper()       = mengubah string menjadi uppercase
5. substr()           = mengambil sebagian string
6. trim()             = menghapus whitespace didepan dan dibelakang string
*/

var_dump(join(",",[10, 11, 12, 13, 14, 15,]));
var_dump(explode(" ", "Mochamad Abdul Rouf"));
var_dump(strtolower("MOCHAMAD ABDUL ROUF"));
var_dump(strtoupper("mochamad abdul rouf"));
var_dump(trim("         rouf            ROUF        ")); #yang depan akan hilang
var_dump(substr("MOCHAMAD ABDUL ROUF", 0, 3));