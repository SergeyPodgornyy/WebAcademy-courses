<?php

$value = 0;

// $value = $value + 1;
// $value += 1;
echo $value++;  // return 0
echo "<br>";
echo $value;    // return 1
echo "<br>";
echo ++$value;  // return 2

echo "<br><br>";

$value2 = 0;

echo ++$value2;  // return 1
echo "<br>";
echo $value2;    // return 1
echo "<br>";
echo $value2++;  // return 1

echo "<br><br>";


$value3 = 5;

// $value = $value - 1;
// $value -= 1;
echo $value3--;  // return 5
echo "<br>";
echo $value3;    // return 4
echo "<br>";
echo --$value3;  // return 3


echo "<br><br>";

$value4 = 5;

echo --$value4;  // return 4
echo "<br>";
echo $value4;    // return 4
echo "<br>";
echo $value4--;  // return 4
