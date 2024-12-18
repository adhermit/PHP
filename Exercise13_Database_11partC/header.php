<?php
session_start();

$isUserConnected = isset($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li>
            <?php if ($isUserConnected): ?>
                <a href="index.php">Index</a> |
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Log In</a>
            <?php endif; ?>
        </li>
        <li><a href="signup.php">Sign Up<a></li>
    </ul>