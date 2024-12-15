<?php

$host = '127.0.0.1';
$db = 'online_learning_platform';
$user = 'root'; // Set your MySQL username
$pass = ''; // Set your MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}
