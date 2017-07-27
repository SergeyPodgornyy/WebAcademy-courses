<?php

$cars = array("Volvo", "BMW", "Toyota");
$numbers = array(4, 6, 2, 22, 11);

// The following example sorts the elements of the $cars array in ascending alphabetical order
sort($cars);
// The following example sorts the elements of the $numbers array in ascending numerical order:
sort($numbers);

echo '<pre>';


// ==================================================================

// The following example sorts the elements of the $cars array in descending alphabetical order:
rsort($cars);
// The following example sorts the elements of the $numbers array in descending numerical order:
rsort($numbers);

// print_r($cars);
// print_r($numbers);

// ==================================================================

$age = array("Peter" => "35", "Joe" => "43", "Ben" => "37");

// The following example sorts an associative array in ascending order, according to the value:
asort($age);

// The following example sorts an associative array in ascending order, according to the key:
ksort($age);


// ==================================================================

// The following example sorts an associative array in descending order, according to the value:
arsort($age);
// print_r($age);

// The following example sorts an associative array in descending order, according to the key:
krsort($age);
