<?php
  session_start();
  if(!isset($_SESSION["username"])){
    header("Location:login.php");
    exit();
  }

  include("../config/dbconnection.php");
  extract($_POST);

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
      UPDATE products SET
        product_name='$product_name',
        model_no='$model_no',
        price='$price',
        overview='$overview',
        image_1='$image_1',
        image_2='$image_2',
        image_3='$image_3',
        image_4='$image_4'
      WHERE product_id=$product_id
    ";

    mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)>=0){
      header("Location:management.php?message=Product updated successfully.");
      exit();
    }else{
      header("Location:management.php?message=Error updating product.");
      exit();
    }
  }catch(Exception $e){
    echo $e->getMessage();
  }
?>