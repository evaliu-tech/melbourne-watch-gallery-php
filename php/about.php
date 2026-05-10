<?php
  session_start();
  $_SESSION["page_name"] = "about";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <title>Melbourne Watch Gallery</title>
</head>
<body>
  <!-- Navigation Bar -->
  <?php include("navbar.php"); ?>

  <!-- Header -->
  <div class="header">
    <img class="logo" src="https://th.bing.com/th/id/OIP.VhJAXMCE6eyDWvqXVnDrrwAAAA?w=129&h=169&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" alt="Melbourne Watch Gallery Logo" />
    <h1 class="site-title">Melbourne Watch Gallery</h1>
  </div>

  <!-- About Us Section -->
  <section class="about-section">
    <h1>About us</h1>
    <p class="about-intro">
      Melbourne Watch Gallery was established to provide Australians with a stylish, reliable and affordable range of smartwatches and sports trackers.
      Our mission is simple: to help customers find the right wearable technology for their lifestyle, fitness goals and everyday needs.
    </p>
    <div class="about-content">
      <div class="about-text">
        <p>
          Melbourne Watch Gallery is a retail company specialising in smartwatches, sports trackers and wearable technology.
          We offer a wide range of products from leading brands, including Samsung, Apple and other popular smart wearable brands.
        </p>
        <p>
          Our stores are located in major Melbourne and Sydney shopping centres, with our head office based in Melbourne, Victoria.
          Since opening, we have focused on providing quality products, competitive prices and friendly customer service.
        </p>
        <p>
          Whether customers are looking for a smartwatch for fitness tracking, work, travel or daily convenience, our team is committed to helping them choose the best product.
        </p>
        <p>
          We believe wearable technology should be practical, stylish and easy to use. That is why Melbourne Watch Gallery continues to expand its product range and improve the customer shopping experience both in-store and online.
        </p>
      </div>
      <div class="about-image">
        <img src="https://th.bing.com/th/id/OIP.Tp2vyicQtIvcFSoKkkhpTgHaEU?w=276&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" alt="Smart watch display" />
      </div>
    </div>
  </section>
</body>
</html>