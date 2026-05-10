<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location:login.php");
    exit();
  }

  extract($_POST);
  include("../config/dbconnection.php");

  $product_name = mysqli_real_escape_string($conn,$product_name);
  $model_no = mysqli_real_escape_string($conn,$model_no);
  $price = mysqli_real_escape_string($conn,$price);
  $overview = mysqli_real_escape_string($conn,$overview);
  $image_1 = mysqli_real_escape_string($conn,$image_1);
  $image_2 = mysqli_real_escape_string($conn,$image_2);
  $image_3 = mysqli_real_escape_string($conn,$image_3);
  $image_4 = mysqli_real_escape_string($conn,$image_4);

  try{
    $sql = "
      INSERT INTO products 
      (product_name,model_no,price,overview,image_1,image_2,image_3,image_4) 
      VALUES 
      ('$product_name','$model_no','$price','$overview','$image_1','$image_2','$image_3','$image_4')
    ";

    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)==1){
      header("Location:management.php?message=Product added successfully.");
      exit();
    }else{
      header("Location:management.php?message=Error adding product.");
      exit();
    }
  }catch(Exception $e){
    echo $e->getMessage();
  }
?>