<?php
  extract($_POST);
  include("../config/dbconnection.php");

  $hashed_password = md5($password);

  $query = "SELECT username FROM users WHERE username='$username' AND password='$hashed_password'";
  $result = mysqli_query($conn,$query);

  if(mysqli_num_rows($result) == 1){
    session_start();
    $_SESSION["username"] = $username;
    header("Location:management.php");
    exit();
  }else{
    header("Location:login.php?message=Username or password is wrong.");
    exit();
  }
?>