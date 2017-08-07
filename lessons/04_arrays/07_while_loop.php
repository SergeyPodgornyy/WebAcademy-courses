<?php

// While Loop
$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}

echo '<br><br>';

// Do...While Loop
$x = 6;

do {
    echo "The number is: $x <br>";
    // $x = md5(time());
    $x++;
} while ($x <= 5);

// Infinite loop

// while (true) {
//     echo "I'm infinite";
// }
