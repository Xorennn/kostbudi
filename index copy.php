<?php
include "koneksi.php";

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Kost</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

    <!-- alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- App -->
    <script src="app.js"></script>
</head>
<body>

    <!-- Header section starts -->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">kost <span>.</span></a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">product</a>
            <a href="pesan.php">sewa kamar</a>
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

    <!-- Home section -->
    <section class="home" id="home">
        
    </section>

    <!-- About section -->
    
<section class="about" id="about">

<h1 class="heading"> <span>about</span> us </h1>

<div class="row"> 

<div class="video-container">
 <video src="about.MOV" loop autoplay muted></video>
 <h3>best kost seller</h3>
</div>   

<div class="content">
 <h3>why choose us?</h3>
 <p>Penyewaan kost murah dan lengkap menyediakan pilihan terbaik bagi para penyewa yang mencari tempat tinggal yang ekonomis namun tidak mengorbankan fasilitas. </p>
 <p>Dengan harga terjangkau, kami menawarkan kamar-kamar yang dilengkapi dengan fasilitas lengkap seperti kamar mandi dalam, akses internet, ruang bersama yang nyaman, serta fasilitas lainnya yang memenuhi kebutuhan sehari-hari. Kami berkomitmen untuk menyediakan pengalaman tinggal yang menyenangkan dan memuaskan bagi para penyewa kami tanpa menguras kantong mereka.</p>

</div>
</div>


</section>

<!--product section-->

<section class="product" id="products" x-data="products">

 <h1 class="heading">List <span>Kost</span></h1>

 <div class="card-container">

    <div class="card">
       <img src="img/kost1a.jpeg" >
    <div class="card-content">
       <h3>kost Tipe A</h3>
       <p>RP 1.500.000,00</p>
       <a href="kost1.php" class="btn">Detail</a>
    </div>
    </div>

    <div class="card">
       <img src="img/kost2a.jpeg" >
    <div class="card-content">
       <h3>kost Tipe B</h3>
       <p>RP 1.000.000,00</p>
       <a href="kost2.php" class="btn">Detail</a>
    </div>
    </div>

    <div class="card">
       <img src="img/kost3a.jpeg" >
    <div class="card-content">
       <h3>kost Tipe C</h3>
       <p>RP.500.000,00</p>
       <a href="kost3.php" class="btn">Detail</a>
    </div>
    </div>
    

 </div>

</section>




 <footer class="footer">
    <div class="container">
        <div class="footer-content">
            <h3>Contact Us</h3>
            <p>Email:Info@example.com</p>
            <p>Phone:+121 56556 565556</p>
            <p>Address:Your Address 123 street</p>
        </div>
        <div class="footer-content">
            <h3>Quick Links</h3>
             <ul class="list">
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">Contact</a></li>
             </ul>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <ul class="social-icons">
             <li><a href=""><i class="fab fa-facebook"></i></a></li>
             <li><a href=""><i class="fab fa-twitter"></i></a></li>
             <li><a href=""><i class="fab fa-instagram"></i></a></li>
             <li><a href=""><i class="fab fa-tiktok"></i></a></li>
            </ul>
            </div>
    </div>
    <div class="bottom-bar">
        <p>&copy; 2024 your company . All rights reserved</p>
    </div>
</footer>
</body>
</html>
