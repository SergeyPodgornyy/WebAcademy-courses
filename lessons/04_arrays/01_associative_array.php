<?php

// Associative arrays are arrays that use named keys that you assign to them.

$age = array(
    "Peter" => "35",
    "Ben"   => "37",
    "Joe"   => "43",
);

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

echo "Ben is " . $age['Ben'] . " years old.";
