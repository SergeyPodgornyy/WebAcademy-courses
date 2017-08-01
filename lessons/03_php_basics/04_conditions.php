<?php

$time = date("H");
echo $time."<br>";

if ($time < "10") {
    echo "Have a good morning!";
} elseif ($time < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

echo "<br><br><br>";

$favColor = "red";

switch ($favColor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

// =================================================================

// $param = [
//     "name"  => "email",
//     "value" => "test@mail.com",
// ];

$paramName = 'email';
$paramValue = "test@mail.com";

switch ($paramName) {
    case "name":
    case "surname":
        return strlen($paramValue) < 255;
    case "email":
        return validateEmail($paramValue);
    default:
        break;
}

function validateEmail() {return true;}
