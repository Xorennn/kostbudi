<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];


// Fetch room data


?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <link rel="stylesheet" href="profil.css">
</head>
<body>
    
    
<body>
<div class="container">
    <div class="header">
    <h1>Selamat datang, <?php echo htmlspecialchars($username); ?></h1>
    <div class="bttn-logout">
<a type="button" class="btn-logout" href="logout.php">logout</a> 
</div>
    </div>
    
    <!-- <div class="list-kamar">
        <h2>LIST Pemesanan</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Waktu Transaksi</th>
                <th>Foto Kamar</th>
                <th>Order ID</th>
                <th>Nama Pemesan</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Tipe Kamar</th>
                <th>Harga Kamar</th>
                <th>Jumlah Bulan</th>
                <th>Total Harga</th>
                <th>Status Pembayaran</th>
                <th>Action</th>
            </tr>
            <?php
            // Query to select orders made by the logged-in user
            $sql = "SELECT * FROM transactions WHERE first_name = '$username'";
            $result = $conn->query($sql);

            // Check query result
            if (mysqli_num_rows($result) > 0) {
                // Display data
                while($row = mysqli_fetch_assoc($result)) {
                    $id = $row["id"];
                    $order_id = $row["order_id"];
                    $gross_amount = $row["gross_amount"];
                    $first_name = $row["first_name"];
                    $phone = $row["phone"];
                    $email = $row["email"];
                    $kamar = $row["kamar"];
                    $harga = $row["harga"];
                    $img = $row["img"];
                    $quantity = $row["quantity"];
                    $status = $row["status"];
                    $created_at = $row["created_at"];

                    // Display data
                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$created_at</td>";
                    echo "<td><img src='$img' alt='Kamar Image' width='100'></td>";
                    echo "<td>$order_id</td>";
                    echo "<td>$first_name</td>";
                    echo "<td>$phone</td>";
                    echo "<td>$email</td>";
                    echo "<td>$kamar</td>";
                    echo "<td>Rp. $harga/Bulan</td>";
                    echo "<td>$quantity Bulan</td>";
                    echo "<td>Rp. $gross_amount</td>";
                    echo "<td>$status</td>";
                    echo "<td class='action'>";
                    echo "<a class='edit' href='edit.php?id_kamar=$id'>Edit</a>";
                    echo "<a class='delete' href='delete.php?id_kamar=$id'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='13'>Tidak ada data</td></tr>";
            }
            ?>
        </table>
    </div>
</div> -->
</body>
</html>