<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "kost";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// $conn = mysqli_connect("localhost", "root", "", "kost");
// // Check connection
// if (mysqli_connect_error()) {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   exit();
// }

