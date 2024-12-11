<?php
$db_name = 'exercise_12php';
$db_user = 'root';
$db_password = '';
try {
    $pdo = new PDO('mysql:dbname=' . $db_name . ';host=localhost;charset=utf8mb4', $db_user, $db_password);
} catch (Exception $e) {
    die('error:' . $e->getMessage());
};
?>