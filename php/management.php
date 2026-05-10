<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location:login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/style.css" />
  <title>Melbourne Watch Gallery</title>
</head>
<body>
  <!-- Navigation Bar -->
  <?php
    $_SESSION["page_name"] = "management";
    include("navbar.php");
  ?>
  <!-- Header -->
  <div class="header">
    <img class="logo" src="https://th.bing.com/th/id/OIP.VhJAXMCE6eyDWvqXVnDrrwAAAA?w=129&h=169&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" alt="Melbourne Watch Gallery Logo" />
    <h1 class="site-title">Melbourne Watch Gallery</h1>
  </div>
  <!-- Page Title -->
  <section class="management-section">
    <h1 class="management-title">Product Management System</h1>
    <?php
      extract($_GET);
      if(isset($message)){
        echo "
          <div class='alert alert-info text-center' role='alert'>
            $message
          </div>
        ";
      }
    ?>
    <!-- Product Table -->
    <div class="management-table-wrapper">
      <table class="table management-table">
        <thead>
          <tr>
            <th scope="col">Product ID</th>
            <th scope="col">Image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include("../config/dbconnection.php");
            extract($_GET);

            if(isset($keywords)){
              $keywords = mysqli_real_escape_string($conn,$keywords);
              $query = "SELECT product_id, product_name, price, image_1 FROM products WHERE product_name LIKE '%$keywords%'";
            }else{
              $query = "SELECT product_id, product_name, price, image_1 FROM products";
            }

            $result = mysqli_query($conn,$query);

            while($row = mysqli_fetch_array($result)){
              echo "
                <tr>
                  <th scope='row'>{$row['product_id']}</th>
                  <td><img class='management-product-img' src='{$row['image_1']}' alt='{$row['product_name']}' style='width:60px;height:60px;max-width:60px;max-height:60px;object-fit:contain;display:block;' /></td>
                  <td>{$row['product_name']}</td>
                  <td>$ {$row['price']}</td>
                  <td>
                    <div class='management-actions'>
                      <a href='editproduct.php?product_id={$row['product_id']}'>Edit</a>
                      <a href='deleteproduct.php?product_id={$row['product_id']}'>Delete</a>
                      <a href='product.php?product_id={$row['product_id']}'>Preview</a>
                    </div>
                  </td>
                </tr>
              ";
            }
          ?>
        </tbody>
      </table>
    </div>
  </section>
</body>
</html>