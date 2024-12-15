<?php
require_once '../config/database.php';
require_once '../src/controllers/AuthController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new AuthController($pdo);
    $auth->login($_POST['email'], $_POST['password']);
}
?>

<h1>Login</h1>
<form method="post">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
