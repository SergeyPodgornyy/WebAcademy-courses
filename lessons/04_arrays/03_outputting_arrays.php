<?php

$cars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15],
];

echo $cars;     // PHP Notice: Array to string conversion

echo '<pre>';
print_r($cars);

var_dump($cars);
