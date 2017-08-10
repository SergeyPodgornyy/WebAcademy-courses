<?php

// phpinfo();

// Note: The session_start() function must be the very first thing in your document. Before any HTML tags.
session_start();

$_SESSION['UserName'] = 'Sergey';

echo '<pre>';
print_r($_SESSION);

// remove all session variables
session_unset();

// destroy the session
session_destroy();
