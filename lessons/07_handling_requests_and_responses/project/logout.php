<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['UserId'])) {
    session_destroy();
}

header('Location: index.php');
