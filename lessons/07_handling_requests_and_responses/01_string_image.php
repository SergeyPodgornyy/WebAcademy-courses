<?php

// Create a 300*90 image
$im = imagecreate(300, 90);

/*
IF imagecreate function doesn't defined, this means your installation of php doesn't have the gd library installed/enabled.
    http://www.php.net/manual/en/image.installation.php
    sudo apt-get install php5-gd
*/

// White background and blue text
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 180, 255);

// Write the string at the top left
imagestring($im, 5, 10, 0, 'Hello world!', $textcolor);

// Output the image
header('Content-type: image/png');
header('X-My-Own-Header: Hello+World');
header("HTTP/1.0 200 OK");

imagepng($im);
imagedestroy($im);
