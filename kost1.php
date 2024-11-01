<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Penyewaan Kost</title>

    <!--font awesome cdn link-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <!--custom css file link-->
    <link rel="stylesheet" href="style_index.css" />
    <link rel="stylesheet" href="style.css">

     <!-- alpine js -->
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

     <!-- App -->
     <script src="app.js"></script>

  </head>
  <body>
    <!--Header section stars-->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">kost <span>.</span></a>
        <nav class="navbar">
            <a href="index.php#home">home</a>
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

    <div class="carousel" x-data="products">
      <div class="carousel-container">
        <div class="carousel-slide">
          <img
            src="img/kost1a.jpeg"
            class="carousel-image"
            width="90%"
            alt="kost"
          />
          <img
            src="img/kost1b.jpeg"
            class="carousel-image"
            width="90%"
            alt="kost"
          />
          <img
            src="img/kost1c.jpeg"
            class="carousel-image"
            width="90%"
            alt="kost"
          />
          <img
            src="img/kost1d.jpeg"
            class="carousel-image"
            width="90%"
            alt="kost"
          />
        </div>
        <button class="carousel-prev">&#10094;</button>
        <button class="carousel-next">&#10095;</button>
      </div>
    </div>

    <div class="container" >
      <div class="price">
        <p>Rp 1.500.000</p>
      </div>
      <div class="information">
        <label>Deskripsi</label>
        <p>
          AC <br />
          Kamar mandi dalam <br />
          Full Furnish <br />
          Water Heater <br />
        </p>
      </div>
      <div class="location-title">Lokasi</div>
      <div class="location">
        <table>
          <tr>
            <th>Provinsi</th>
            <td>Jakarta</td>
          </tr>
          <tr>
            <th>Kota</th>
            <td>Jakarta Selatan</td>
          </tr>
          <tr>
            <th>Kecamatan</th>
            <td>Jagakarsa</td>
          </tr>
          <tr>
            <th>Kelurahan</th>
            <td>Tanjung Barat</td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td>Jalan Haji Saidi nomor 29C, RT 007 RW 05</td>
          </tr>
          <tr>
            <th>Jenis Kost</th>
            <td>Kost Campur</td>
          </tr>
          <tr>
            <th>AC</th>
            <td>Ya</td>
          </tr>
          <tr>
            <th>Free Wifi</th>
            <td>Ya</td>
          </tr>
          <tr>
            <th>Kamar Mandi Dalam</th>
            <td>Ya</td>
          </tr>
        </table>
      </div>

      <div class="facility-title">Fasilitas</div>
      <div class="facility">
        <table>
          <tr>
            <th>Fasilitas Kamar</th>
            <td>
              <i class="fa-solid fa-check" style="color: #00ff04"></i> Spring
              Bed
              <br />
              <i class="fa-solid fa-check" style="color: #00ff04"></i> Parabot
              <br />
              <i class="fa-solid fa-check" style="color: #00ff04"></i> Free WiFi
              <br />
              <i class="fa-solid fa-check" style="color: #00ff04"></i> AC
              <br />
              <i class="fa-solid fa-check" style="color: #00ff04"></i> Kamar
              Mandi Dalam
              <br />
            </td>
          </tr>
          <tr>
            <th>Fasilitas Bersama</th>
            <td>
              <i class="fa-solid fa-check" style="color: #00ff04"></i> Dapur
              <br />
              <i class="fa-solid fa-check" style="color: #00ff04"></i> Parkir
              Motor
              <br />
            </td>
          </tr>
          <tr>
            <th>Fasilitas Sekitar Kamar</th>
            <td>
              <i class="fa-solid fa-check" style="color: #00ff04"></i> Kampus
              <br />
              <i class="fa-solid fa-check" style="color: #00ff04"></i>
              Perkantoran
              <br />
              <i class="fa-solid fa-check" style="color: #00ff04"></i>
              Mall / Pusat Perbelanjaan
              <br />
              <i class="fa-solid fa-check" style="color: #00ff04"></i>
              Rumah Sakit
              <br />
              <i class="fa-solid fa-check" style="color: #00ff04"></i>
              Rumah Makan
              <br />
              <i class="fa-solid fa-check" style="color: #00ff04"></i>
              Minimarket
              <br />
              
            </td>
          </tr>
        </table>
      </div>
      <div class="sewa-title">
        
        <a href="pesan.php" class="btn">Sewa Kost</a>
     
    </div>
      <!-- <div class="form-sewa" x-data >
              <form action="" id="checkoutForm">
                <h5>Custumor Detail</h5>
                <label for="name">
                  <span>Nama</span>
                  <input type="text" name="name" id="name">
                </label>
                <label for="email">
                  <span>Email</span>
                  <input type="email" name="email" id="email">
                </label>
                <label for="phone">
                  <span>Phone</span>
                  <input type="number" name="phone" id="phone" autocomplete="off">
                </label>

                <button class="checkout-button" type="submit" id="checkout-button"
                value="checkout">checkout</button>
                <a href="#" class="btn">Checkout</a> -->

              </form>   
      
      </div> 

      



    </div>

    
    
    
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

    <script>
      const carouselSlide = document.querySelector(".carousel-slide");
      const carouselImages = document.querySelectorAll(".carousel-slide img");

      // Buttons
      const prevBtn = document.querySelector(".carousel-prev");
      const nextBtn = document.querySelector(".carousel-next");

      // Counter
      let counter = 0;
      const size = carouselImages[0].clientWidth;

      carouselSlide.style.transform = `translateX(${-size * counter}px)`;

      // Button listeners
      nextBtn.addEventListener("click", () => {
        if (counter >= carouselImages.length - 1) return;
        carouselSlide.style.transition = "transform 0.4s ease-in-out";
        counter++;
        carouselSlide.style.transform = `translateX(${-size * counter}px)`;
      });

      prevBtn.addEventListener("click", () => {
        if (counter <= 0) return;
        carouselSlide.style.transition = "transform 0.4s ease-in-out";
        counter--;
        carouselSlide.style.transform = `translateX(${-size * counter}px)`;
      });

      // Transition end listener
      carouselSlide.addEventListener("transitionend", () => {
        if (carouselImages[counter].id === "lastClone") {
          carouselSlide.style.transition = "none";
          counter = carouselImages.length - 2;
          carouselSlide.style.transform = `translateX(${-size * counter}px)`;
        }
        if (carouselImages[counter].id === "firstClone") {
          carouselSlide.style.transition = "none";
          counter = carouselImages.length - counter;
          carouselSlide.style.transform = `translateX(${-size * counter}px)`;
        }
      });
    </script>
  </body>
</html>
