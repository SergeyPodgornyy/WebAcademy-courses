<?php

header("HTTP/1.0 404 Not Found");

$image = 'http://www.google.com.ua/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png';

$info = getimagesize($image);
error_log(print_r($info, true));

header('Content-Type: ' . $info['mime']);
// header('Content-Type: text/html');

echo file_get_contents($image);

// header('Content-Type: text/plain');
// header('Content-Type: text/html');
// header('Content-Type: image/png');
// echo '<h1 style="text-align:center">Hello World</h1>';
