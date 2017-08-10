<?php

require 'helper.php';

// error_log(print_r(getallheaders(), true));
$isAuthorized = false;
$secretToken = '6b89a5266c5cc337db61685983ecbf01';

foreach (getallheaders() as $name => $value) {
    echo "<b>$name:</b> $value", LS;

    if ($name == 'X-Api-Token' && $value == $secretToken) {
        $isAuthorized = true;
    }
}

if ($isAuthorized) {
    echo LS, 'Hello Admin';
}
