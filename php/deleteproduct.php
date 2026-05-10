<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location:login.php");
    exit();
  }

  extract($_GET);
  include("../config/dbconnection.php");

  if(!isset($confirm)){
    $query = "SELECT product_id,product_name,image_1 FROM products WHERE product_id=$product_id";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
  }else{
    try{
      $sql = "DELETE FROM products WHERE product_id=$product_id";
      mysqli_query($conn,$sql);

      if(mysqli_affected_rows($conn)==1){
        header("Location:management.php?message=Product deleted successfully.");
        exit();
      }else{
        header("Location:management.php?message=Error deleting product.");
        exit();
      }
    }catch(Exception $e){
      echo $e->getMessage();
    }
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

  <!-- Delete Confirmation -->
  <section class="delete-section">
    <div class="delete-card">
      <h1>Delete Product</h1>
      <p>Are you sure you want to delete this product?</p>
      <img src="<?php echo $row['image_1']; ?>" alt="<?php echo $row['product_name']; ?>">
      <h2><?php echo $row['product_name']; ?></h2>
      <div class="delete-actions">
        <a class="delete-btn" href="deleteproduct.php?product_id=<?php echo $row['product_id']; ?>&confirm=yes">Delete Product</a>
        <a class="cancel-btn" href="management.php">Cancel</a>
      </div>
    </div>
  </section>
</body>
</html>