<?php
  session_start();
  $_SESSION["page_name"] = "login";
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
<body onload="clearLoginForm()">
  <!-- Navigation Bar -->
  <?php include("navbar.php"); ?>
  <!-- Header -->
  <div class="header">
    <img class="logo" src="https://th.bing.com/th/id/OIP.VhJAXMCE6eyDWvqXVnDrrwAAAA?w=129&h=169&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" alt="Melbourne Watch Gallery Logo" />
    <h1 class="site-title">Melbourne Watch Gallery</h1>
  </div>
  <!-- Error Message -->
  <?php
    extract($_GET);
    if(isset($message)){
      echo "
        <div class='container mt-4'>
          <div class='alert alert-danger text-center' role='alert'>
            $message
          </div>
        </div>
      ";
    }
  ?>
  <!-- Login Form -->
  <div class="login-container">
    <form class="login" action="user_validation.php" method="POST" autocomplete="off">
      <h2 class="login-title">Login</h2>
      <div class="mb-4">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autocomplete="new-password" value="" required>
      </div>
      <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" autocomplete="new-password" value="" required>
      </div>
      <button type="submit" class="btn">Login</button>
    </form>
  </div>
  <!-- Clear Autofill -->
  <script>
    function clearLoginForm(){
      document.getElementById("username").value = "";
      document.getElementById("password").value = "";
    }
    window.onload = function(){
      clearLoginForm();
      setTimeout(clearLoginForm,100);
      setTimeout(clearLoginForm,500);
    };
  </script>
</body>
</html>