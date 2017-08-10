<?php

// Note: The setcookie() function must appear BEFORE the <html> tag.

setcookie('UserName', 'Sergey');
setcookie('Password', 'oLolOLMyPassword');
setcookie('Company', 'WebbyLab', time());

echo "<pre>";
print_r($_COOKIE);

// Note: The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received (to prevent URLencoding, use setrawcookie() instead).
