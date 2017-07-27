<?php

$x = 100;
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world! 1<br>";
}
if ($x == 100 && $y == 50) {
    echo "Hello world! 2<br>";
}

if ($x == 99 or $y == 50) {
    echo "Hello world! 3<br>";
}
if ($x == 100 || $z == 80) {
    echo "Hello world! 4<br>";
}

if ($x == 100 xor $y == 80) {
    echo "Hello world! 5<br>";
}

$x = false;

if (!$x) {
    echo "Hello world! 6<br>";
}
