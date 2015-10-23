<?php
$currency= "TK";  ////Currency sumbol or code
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "banoful";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn-> connect_error){
  die("Connection Failed");
  
}