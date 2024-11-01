<?php
require 'koneksi.php';

session_start();
include "koneksi.php"; // Masukkan koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan query untuk mencari pengguna dengan username dan password yang sesuai
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);
    
    if ($result->num_rows == 1) {
        // Pengguna ditemukan
        $user = $result->fetch_assoc();
        
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role']; // Set sesi peran pengguna

        if ($user['role'] == 'admin') {
            // Redirect ke halaman admin
            header('Location: admin/index.php');
            exit();
        } else {
            // Redirect ke halaman pengguna biasa
            header('Location: index.php');
            exit();
        }
    } else {
        // Username atau password tidak valid
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <h1>Login</h1>
  <form action="login.php" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Login">
  </form>
  <p>belum punya akun? <a href="register.php">Register here</a>.</p>
</body>
</html>