<?php

$cars = [
    [
        'vendor'  => "Volvo",
        'inStock' => 22,
        'sold'    => 18,
    ],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15],
];

echo $cars[0]['vendor'] . ": In stock: " . $cars[0]['inStock'] . ", sold: " . $cars[0]['sold'] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";
