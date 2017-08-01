<?php

// Associative arrays are arrays that use named keys that you assign to them.

$name = 'Markus';

$age = array(
    "Peter" => "35",
    "Ben"   => "37",
    "Joe"   => "43",
);

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";
// $age['Markus'] = "15";

if (isset($age[$name]) && !empty($age[$name])) {
    echo "$name is " . $age[$name] . " years old.";
} elseif (isset($age[$name]) && empty($age[$name])) {
    echo "Wrong age format for $name";
} else {
    echo "There is no info about $name.";
}
