<?php
require_once('admin/connection.php');
  $nameErr = $username =$email= $comment = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["username"])) {
    echo  $nameErr = "username is required<br>";
   } else {
$username = $_POST["username"] ;
   }
  
     if (empty($_POST["email"])) {
    echo  $nameErr = "email is required<br>";
   } else {
$email = $_POST["email"] ;
   }

  
     if (empty($_POST["comment"])) {
    echo  $nameErr = "comment is required<br>";
   } else {
$comment = $_POST["comment"] ;
   }
}

if(!$nameErr){
    $sql="INSERT INTO `contact` (`id`, `username`, `email`, `comment`) VALUES (NULL, '$username', '$email', '$comment');";
  
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