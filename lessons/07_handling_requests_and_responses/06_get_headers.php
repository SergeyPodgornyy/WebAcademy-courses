<?php

include 'helper.php';

$url = 'http://www.example.com';

echo '<pre>';
print_r(get_headers($url));

print_r(get_headers($url, true));

$headers = get_headers($url, true);
if (in_array('Server', array_keys($headers))) {
    echo 'Header Server received', LS;
}

// Берем текущий код и устанавливаем новый
var_dump(http_response_code(404));      // 200 => 404

// Берем новый код
var_dump(http_response_code());         // 404
