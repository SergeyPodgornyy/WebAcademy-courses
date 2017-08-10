<?php

session_start();

$data = [
    [
        'id'        => 1,
        'email'     => 'test@test.com',
        'password'  => '1234',
    ], [
        'id'        => 2,
        'email'     => 'admin@test.com',
        'password'  => '1234',
    ],
];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['email']) || !isset($_POST['password'])) {
        die('Email and password required. Go back to <a href="index.php">Home</a>');
    } elseif (!strlen(trim($_POST['email'])) || !strlen(trim($_POST['password']))) {
        die('Email and password cannot be empty. Go back to <a href="index.php">Home</a>');
    }

    foreach ($data as $item) {
        if ($item['email'] == trim($_POST['email'])
            && $item['password'] == trim($_POST['password'])) {
            $_SESSION['UserId'] = $item['id'];
            header('Location: welcome.php');
            exit;
        }
    }

    die('Wrong email or password. Back to <a href="index.php">Home</a>');
} else {
    header('Location: index.php');
}
