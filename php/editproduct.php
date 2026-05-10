<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location:login.php");
    exit();
  }

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
  <!-- Edit Product Form -->
  <section class="product-form-section">
    <h1 class="product-form-title">Edit Product</h1>
    <form class="product-form" action="updateproduct.php" method="POST">
      <input type="hidden" value="<?php echo $row['product_id']; ?>" name="product_id">
      <div class="product-form-row">
        <label for="product_name" class="form-label">Product Name</label>
        <input value="<?php echo $row['product_name']; ?>" required type="text" class="form-control" id="product_name" name="product_name">
      </div>
      <div class="product-form-row">
        <label for="model_no" class="form-label">Model No</label>
        <input value="<?php echo $row['model_no']; ?>" required type="text" class="form-control" id="model_no" name="model_no">
      </div>
      <div class="product-form-row">
        <label for="price" class="form-label">Price</label>
        <input value="<?php echo $row['price']; ?>" required type="text" class="form-control" id="price" name="price">
      </div>
      <div class="product-form-row">
        <label for="overview" class="form-label">Overview</label>
        <textarea required name="overview" class="form-control" id="overview" rows="2"><?php echo $row['overview']; ?></textarea>
      </div>
      <div class="product-form-row">
        <label for="image_1" class="form-label">Image 1</label>
        <input value="<?php echo $row['image_1']; ?>" required type="text" class="form-control" id="image_1" name="image_1">
      </div>
      <div class="product-form-row">
        <label for="image_2" class="form-label">Image 2</label>
        <input value="<?php echo $row['image_2']; ?>" required type="text" class="form-control" id="image_2" name="image_2">
      </div>
      <div class="product-form-row">
        <label for="image_3" class="form-label">Image 3</label>
        <input value="<?php echo $row['image_3']; ?>" required type="text" class="form-control" id="image_3" name="image_3">
      </div>
      <div class="product-form-row">
        <label for="image_4" class="form-label">Image 4</label>
        <input value="<?php echo $row['image_4']; ?>" required type="text" class="form-control" id="image_4" name="image_4">
      </div>
      <button type="submit" class="btn product-form-btn">Save Change</button>
    </form>
  </section>
</body>
</html>