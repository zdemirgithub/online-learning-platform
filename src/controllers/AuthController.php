<?php

require_once '../models/User.php';

class AuthController {
    private $user;

    public function __construct($pdo) {
        $this->user = new User($pdo);
    }

    public function register($name, $email, $password) {
        try {
            $this->user->register($name, $email, $password);
            header('Location: login.php');
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function login($email, $password) {
        $user = $this->user->login($email, $password);
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: dashboard.php');
        } else {
            echo "Invalid email or password.";
        }
    }
}
