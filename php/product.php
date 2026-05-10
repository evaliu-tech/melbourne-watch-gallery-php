<?php
  session_start();
  $_SESSION["page_name"] = "product";

  extract($_GET);
  include("../config/dbconnection.php");

  try{
    $query = "SELECT product_id,product_name,overview,price,model_no,image_1,image_2,image_3,image_4 FROM products WHERE product_id=$product_id";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
  }catch(Exception $e){
    echo $e->getMessage();
  }
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
    <!-- Product Detail -->
    <div class="product_detail_container">
      <div class="product_detail_image">
        <img class="main_image" src="<?php echo $row['image_1']; ?>" alt="<?php echo $row['product_name']; ?>" />
        <div class="thumbnail_images">
          <img onmouseover="change_image(this)" src="<?php echo $row['image_1']; ?>" alt="<?php echo $row['product_name']; ?>" />
          <img onmouseover="change_image(this)" src="<?php echo $row['image_2']; ?>" alt="<?php echo $row['product_name']; ?>" />
          <img onmouseover="change_image(this)" src="<?php echo $row['image_3']; ?>" alt="<?php echo $row['product_name']; ?>" />
          <img onmouseover="change_image(this)" src="<?php echo $row['image_4']; ?>" alt="<?php echo $row['product_name']; ?>" />
        </div>
      </div>
      <div class="product_detail_info">
        <h2><?php echo $row['product_name']; ?></h2>
        <h3>Model: <?php echo $row['model_no']; ?></h3>
        <h4 class="product_price">$<span><?php echo $row['price']; ?></span></h4>
        <button onclick="add_item2(this)" class="btn">Add to cart</button>
        <h2 class="product_overview">Product Overview</h2>
        <p><?php echo $row['overview']; ?></p>
      </div>
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