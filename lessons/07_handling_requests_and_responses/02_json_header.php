<?php

header('Content-Type: application/json;charset=utf-8');

$data = [
    [
        "id"    => 1,
        "name"  => "Sergey",
        "stack" => ["PHP", "JS", "React", "NodeJS"]
    ], [
        "id"    => 2,
        "name"  => "Andrew",
        "stack" => ["JS", "Backbone"]
    ]
];

$json = json_encode($data);
echo $json;

$phpObject = json_decode($json, false);
error_log(print_r($phpObject, true));

$phpArray = json_decode($json, true);
error_log(print_r($phpArray, true));
