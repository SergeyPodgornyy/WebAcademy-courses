<?php

$cars = array();                            // Create an empty array
$cars = array("Volvo", "BMW", "Toyota");    // Create an array with values using array function
$cars = ["Volvo", "BMW", "Toyota"];         // Create an array with values

// Reassign values
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

