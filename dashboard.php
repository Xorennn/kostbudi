<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location:login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <a href="#" class="logo">kost <span>.</span></a> 
    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="#about">About</a>
        <a href="index.html">Product</a>
        <a href="#review">Review</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="icons">
        <a href="logout.php" class="fas fa-user">Logout</a>
    </div>
  </header>

  <section class="dashboard-section">
    <div class="dashboard-container">
      <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
      <p>This is your dashboard.</p>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="index.html">Products</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <ul class="social-icons">
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="bottom-bar">
        <p>&copy; 2023 your company . All rights reserved</p>
    </div>
  </footer>
</body>
</html>
