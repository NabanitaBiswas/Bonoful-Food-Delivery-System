<?php
require_once('connection.php');
  $nameErr = $product_name = $product_code=$product_desc =$product_image_name= $price= $category = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["product_name"])) {
    echo  $nameErr = "Product is required<br>";
   } else {
$product_name = $_POST["product_name"] ;
   }
  
     if (empty($_POST["product_code"])) {
    echo  $nameErr = "Product code is required<br>";
   } else {
$product_code = $_POST["product_code"] ;
   }
  
     if (empty($_POST["product_desc"])) {
    echo  $nameErr = "Description is required<br>";
   } else {
$product_desc = $_POST["product_desc"] ;
   }
     if (empty($_POST["product_image_name"])) {
    echo  $nameErr = "Product image is required<br>";
   } else {
$product_image = $_POST["product_image_name"] ;
   }
  
     if (empty($_POST["price"])) {
  echo  $nameErr = "price is required<br>";
   } else {
 $price = $_POST["price"] ;
   }
  
  if (empty($_POST["category"])) {
  echo  $nameErr = "category is required<br>";
   } else {
  $category = $_POST["category"] ;
   }
  
}

if(!$nameErr){
    $sql="INSERT INTO `products` (`id`, `product_name`, `product_code`, `product_desc`, `product_img_name`, `price`, `category_id`) VALUES (NULL, '$product_name', '$product_code', '$product_desc', '$product_image', ' $price', '$category ');";
  
  if($conn->query($sql) == TRUE)
    {
    echo "Inserted successfully";
  }
  else
    {
    echo "something is wrong";

  }
}
  else{
     echo "Access Denied";
  }

  ?>