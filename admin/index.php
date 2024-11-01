<?php
include "koneksi.php";

?>
<!-- HTML untuk dashboard -->
<!DOCTYPE html>
<html>
<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>

<header> 





</header>  


<body>
<div class="container">
    <div class="header">
        <h1>Admin Dashboard</h1>
    </div>
    <div class="bttn-logout">
<a type="button" class="btn-logout" href="../index.php">logout</a> 
</div>
    <!-- <a href="add_kamar.php" class="btn-tambah">+ Tambah Data Baru</a> -->
    <div class="list-kamar">
        <h2>LIST Pemesanan</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Waktu Transaksi</th>
                <!-- <th>Foto Kamar</th> -->
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
            <?php // Query untuk mengambil data 
$sql = "SELECT * FROM transactions";
$result = mysqli_query($conn, $sql);

// Check hasil query
if (mysqli_num_rows($result) > 0) {
    // Tampilkan data 
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $order_id = $row["order_id"];
        $gross_amount= $row["gross_amount"];
        $first_name = $row["first_name"];
        $phone = $row["phone"];
        $email = $row["email"];
        $kamar = $row["kamar"];
        $harga = $row["harga"];
        // $img = $row["img"];
        $quantity = $row["quantity"];
        $status = $row["status"];
        $created_at = $row["created_at"];

        
        // Tampilkan data 
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$created_at</td>";
        // echo "<td>$img</td>";
        echo "<td> $order_id</td>";
        echo "<td> $first_name</td>";
        echo "<td> $phone</td>";
        echo "<td> $email</td>";
        echo "<td> $kamar</td>";
        echo "<td>Rp. $harga/Bulan</td>";
        echo "<td> $quantity Bulan</td>";
        echo "<td>Rp. $gross_amount</td>";
        echo "<td> $status</td>";
        echo "<td class='action'>";
        echo "<a class='edit' href='edit.php?id_kamar=$id'>Edit</a>";
        echo "<a class='delet' href='delete.php?id_kamar=$id'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "Tidak ada data ";
}

?>
            <!-- Data kamar akan ditampilkan di sini -->
        </table>

        
    </div>
</div>
</body>
</html>