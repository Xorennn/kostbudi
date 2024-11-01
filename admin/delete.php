<?php
include "koneksi.php";

if(isset($_GET['id_kamar'])){
    $id = $_GET['id_kamar'];
    $sql = "DELETE FROM transactions WHERE id='$id'";

    if(mysqli_query($conn, $sql)){
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    header("Location: index.php");
}
?>
