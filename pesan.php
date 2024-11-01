<?php
include "koneksi.php";

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];


// Fetch room data
$sqlUser = "SELECT fullname, email FROM users WHERE username = '$username'";
$resultUser = mysqli_query($conn, $sqlUser);
$user = mysqli_fetch_assoc($resultUser);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyewaan Kost</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

 <!--custom css file link-->
    <link rel="stylesheet" href="style.css">

    <!-- alpine js -->
   
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<!-- midtrans -->
<script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-Lio5pSkskc51pIsG"></script>
</head>
<body>


   <!--Header section stars-->   
   <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">kost <span>.</span></a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="index.php#about">about</a>
            <a href="index.php#products">product</a>
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

<!--product section-->

<section class="product" id="products" x-data="products">

   <h1 class="heading" style="padding-top: 8rem;">Sewa <span>Kost</span></h1>

   <div class="card-container">
   <template x-for="(item, index) in items" x-key="index">
      <div class="card">
         <img :src="`img/${item.img}`" :alt="item.name">
         <div class="card-content">
             <h3 x-text="item.name"></h3>
             <p x-text="rupiah(item.price)"></p>
                 <a href="#" @click.prevent="$store.cart.add(item)" class="btn">Tambah</a>
             
         </div>
      </div>
      </template>

   </div>

   <div class="Shopping-cart">
      <template x-for="(item, index) in $store.cart.items" x-keys="index">
    <div class="cart-item">
      <img :src="`img/${item.img}`" :alt="item.name">
        <div class="item-detail">
         <h3 x-text="item.name"></h3>
         <p x-text="rupiah(item.price)"></p> &times;
            <button id="remove" @click="$store.cart.remove(item.id)">&minus;</button>
            <p x-text="item.quantity"></p>
            <button id="add" @click="$store.cart.add(item)">&plus;</button>
            <p x-text="rupiah(item.total)"></p>

        </div>

        
    </div>
   </template>
   <h3 x-show="!$store.cart.items"> Cart is empty</h3>
   <h3 x-show="$store.cart.items.length"> TOTAL : <p x-text="rupiah($store.cart.total)"></p> </h3>
   
   <div class="form-container" x-show="$store.cart.items.length">
      <form action="" id="checkoutForm">
         
         <input type="hidden" name="items" x-model="JSON.stringify($store.cart.items)">
         <input type="hidden" name="total" x-model="$store.cart.total">
         
         <h5>Custumor Detail</h5>
         
         <label for="name">
           <span>Nama</span>
           <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($user['fullname']); ?>" readonly>
         </label>
         
         <label for="email">
           <span>Email</span>
           <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user['email']); ?>" readonly>
         </label>
         
         <label for="phone">
           <span>Phone</span>
           <input type="number" name="phone" id="phone"  autocomplete="off">
         </label>

         <button class="checkout-button disabled" type="submit" id="checkout-button"
         value="checkout">checkout</button>
      </form>
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
<!-- App -->
<script src="app.js"></script>
</body>
</html>

