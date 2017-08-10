<?php

if (isset($_GET['redirect']) && $_GET['redirect'] === 'google') {
    header('Location: http://google.com');
}

echo "Hello from this page";
