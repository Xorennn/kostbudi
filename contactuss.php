<?php
include "koneksi.php";

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Boarding House Owner</title>
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="stylesss.css">
</head>
<body>
<header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">kost <span>.</span></a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="index.php#about">about</a>
            <a href="index.php#products">product</a>
            <a href="pesan.html">sewa kamar</a>
            <a href="contactuss.php">Contact</a>
        </nav>
        <div class="icons">
        <?php if(isset($_SESSION['username'])): ?>
            <a href="profil.php" class="fas fa-user"></a>
            <a href="profil.php" style="font-size:20px">Profil</a>
        <?php else: ?>
            <a href="login.php" class="fas fa-user"></a>
            <a href="login.php" style="font-size:20px">Login</a>
        <?php endif; ?>
    </div>
    </header>

    <div class="container">
        <h1>Hubungi Pemilik Kost</h1>
        <form id="contactForm">
            <div class="form-group">
                <label for="boardingHouseName">Nama:</label>
                <input type="text" id="boardingHouseName" name="boardingHouseName" placeholder="Masukkan nama kost" required>
            </div>
            <div class="form-group">
                <label for="phoneNumber">Nomor HP:</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Masukkan nomor HP" required>
            </div>
            <div class="form-group">
                <label for="whatsappNumber">Whatsapp:</label>
                <input type="tel" id="whatsappNumber" name="whatsappNumber" placeholder="Masukkan nomor Whatsapp" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan alamat email" required>
            </div>
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" placeholder="Masukkan pesan Anda" required></textarea>
            </div>
            <button type="submit" onclick="sendToWhatsApp()">HUBUNGI</button>
        </form>
    </div>

    <script>
        function sendToWhatsApp() {
            const boardingHouseName = document.getElementById('boardingHouseName').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            const whatsappNumber = document.getElementById('whatsappNumber').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            
            const whatsappUrl = 'https://wa.me/6282241395457?text=' +
                'Nama: ' + encodeURIComponent(boardingHouseName) + '%0A' +
                'Nomor HP: ' + encodeURIComponent(phoneNumber) + '%0A' +
                'Email: ' + encodeURIComponent(email) + '%0A' +
                'Pesan: ' + encodeURIComponent(message);
            
            window.open(whatsappUrl, '_blank');
        }
    </script>
</body>
</html>
