<?php
require 'vendor/autoload.php';

use Firebase\JWT\JWT;
$secret_key = "supersecretkey";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $role = $_POST['role'] ?? 'user';

    $payload = [
        "username" => $username,
        "role" => $role,
        "iat" => time(),
    ];

    $jwt = JWT::encode($payload, $secret_key, 'HS256');
    echo "Your token: $jwt";
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['token'])) {
    $token = $_GET['token'];

    try {
        $decoded = JWT::decode($token, $secret_key, ['HS256']);
        if ($decoded->role === 'admin') {
            echo "Welcome, admin!";
        } else {
            echo "Welcome, user!";
        }
    } catch (Exception $e) {
        echo "Invalid token.";
    }
}
?>
