<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbkost";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// $conn=mysqli_connect("localhost","root","","kost");
// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

?>
