<?php
function verifyLogIn(string $email, string $password)
{
    if ($email === "test@gmail.com" && $password === "ABC123") {
        return true;
    } else {
        return false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>