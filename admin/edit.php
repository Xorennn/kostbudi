<?php
include "koneksi.php";

if(isset($_GET['id_kamar'])){
    $id = $_GET['id_kamar'];
    $sql = "SELECT * FROM transactions WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['update'])){
        $order_id = $_POST['order_id'];
        $gross_amount = $_POST['gross_amount'];
        $first_name = $_POST['first_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $kamar = $_POST['kamar'];
        $harga = $_POST['harga'];
        $img = $_POST['img'];
        $quantity = $_POST['quantity'];
        $status = $_POST['status'];

        $update_sql = "UPDATE transactions SET  gross_amount='$gross_amount', first_name='$first_name', phone='$phone', email='$email', kamar='$kamar', harga='$harga', img='$img', quantity='$quantity', status='$status' WHERE id='$id'";
        if(mysqli_query($conn, $update_sql)){
            header("Location: index.php");
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
} else {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kamar</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
<div class="container">
    <h1>Edit Data Kamar</h1>
    <form method="POST" action="">
        Order ID: <input type="text" name="order_id" value="<?php echo $row['order_id']; ?>"readonly><br>
        Nama Pemesan: <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"><br>
        No Telepon: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        Tipe Kamar: <input type="text" name="kamar" value="<?php echo $row['kamar']; ?>"><br>
        Harga Kamar: <input type="text" name="harga" value="<?php echo $row['harga']; ?>"><br>
        Foto Kamar: <input type="text" name="img" value="<?php echo $row['img']; ?>"><br>
        Jumlah Bulan: <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"><br>
        Total Harga: <input type="text" name="gross_amount" value="<?php echo $row['gross_amount']; ?>"><br>
        Status Pembayaran: <input type="text" name="status" value="<?php echo $row['status']; ?>"><br>
        <input type="submit" name="update" value="Update">
    </form>
</div>
</body>
</html>
