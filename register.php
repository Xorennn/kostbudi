<?php
// require 'koneksi.php';
// $fullname = $_POST["fullname"];
// $username = $_POST["username"];
// $email = $_POST["email"];
// $password = $_POST["password"];

// $query_sql = "INSERT INTO user (fullname, username, email, password)
//                 VALUES ('$fullname','$username','$email','$password')";

// if (mysqli_query($conn, $query_sql)) {
//     header("location:login.php");
// }else {
//     echo "pendaftaran gagal :" . mysqli_error($conn);
// }


require 'koneksi.php';
$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO users (fullname, username, email, password)
              VALUES ('$fullname','$username','$email','$password')";

if (mysqli_query($conn, $query_sql)) {
    header("location:login.html");
} else {
    echo "Registration failed: " . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <h1>Register</h1>
  <form action="register.php" method="POST">
    <label for="fullname">Full Name:</label><br>
    <input type="text" id="fullname" name="fullname"><br>
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>

    <a href="login.php">
      <input type="submit" value="Register">
    </a>
    
  </form>

  <p>sudah punya akun? <a href="login.php">Login here</a></p>
</body>
</html>
