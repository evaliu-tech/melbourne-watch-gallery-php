<?php
  session_start();
  $_SESSION["page_name"] = "home";
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
  <script src="../assets/js/project.js"></script>
  <title>Melbourne Watch Gallery</title>
</head>
<body onload="display_shoppingcart()">
  <!-- Navigation Bar -->
  <?php include("navbar.php"); ?>
  <!-- Header -->
  <div class="header">
    <img class="logo" src="https://th.bing.com/th/id/OIP.VhJAXMCE6eyDWvqXVnDrrwAAAA?w=129&h=169&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" alt="Melbourne Watch Gallery Logo" />
    <h1 class="site-title">Melbourne Watch Gallery</h1>
  </div>
  <!-- Main Layout -->
  <div class="main_container">
    <!-- Product Section -->
    <div class="product_container">
      <?php
        include("../config/dbconnection.php");
        $query = "SELECT product_id, product_name, price, image_1 FROM products";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result)){
          echo "
            <div class='product'>
              <a href='product.php?product_id={$row['product_id']}'>
                <h2>{$row['product_name']}</h2>
                <img src='{$row['image_1']}' alt='{$row['product_name']}' />
              </a>
              <div class='product_info'>
                <h2>$<span>{$row['price']}</span></h2>
                <button onclick='add_item(this)' class='btn'>Add to cart</button>
              </div>
            </div>
          ";
        }
      ?>
    </div>
    <!-- Shopping Cart -->
    <div class="shopping_cart">
      <div class="cart_title">
        <h2>Shopping Cart</h2>
      </div>
      <div id="shopping_container"></div>
      <div class="total_row">
        <h2>Total</h2>
        <h2 id="total"></h2>
      </div>
      <button class="btn">
        Check out
        <span id="item_count" class="badge text-bg-secondary"></span>
      </button>
    </div>
  </div>
</body>
</html>