<?php

if (php_sapi_name() === 'cli') {
    define('LS', "\n");
} else {
    define('LS', '<br>');
}
