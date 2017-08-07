<?php

if (php_sapi_name() === 'cli') {
    define('LS', "\n");
} else {
    define('LS', '<br>');
}
echo '<pre>';

// ===========================================================

$cars = array("Volvo", "BMW", "Toyota");
$numbers = array(4, 6, 2, 22, 11);

// The following example sorts the elements of the $cars array in ascending alphabetical order
sort($cars);
// print_r($cars);

// The following example sorts the elements of the $numbers array in ascending numerical order:
sort($numbers);
// print_r($numbers);



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
// print_r($age);

// The following example sorts an associative array in ascending order, according to the key:
ksort($age);
// print_r($age);


// ==================================================================

// The following example sorts an associative array in descending order, according to the value:
arsort($age);
// print_r($age);

// The following example sorts an associative array in descending order, according to the key:
krsort($age);
// print_r($age);



// ==================================================================



function cmp($a, $b) {
    if ($a['n'] == $b['n']) {
        return 0;
    }
    return ($a['n'] > $b['n']) ? -1 : 1;
}

$a = array(
    'a' => array("l" => "A", "n" => 1),
    'b' => array("l" => "B", "n" => 2),
    'c' => array("l" => "C", "n" => 1),
    'd' => array("l" => "D", "n" => 2),
    'e' => array("l" => "E", "n" => 2),
);

uasort($a, 'cmp');
print_r($a);
