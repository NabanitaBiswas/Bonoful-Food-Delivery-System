

<div class="notification">
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/connection.php');
  $nameErr = $ship_address = $orderlist = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["ship_address"])) {
    echo  $nameErr = "ship_address is required<br>";
   } else {
$ship_address = $_POST["ship_address"] ;
   }
  
     if (empty($_POST["orderlist"])) {
    echo  $nameErr = "orderlist is required<br>";
   } else {
$orderlist = $_POST["orderlist"] ;
   }
if(!$nameErr){
$customeremail = $_SESSION['user_email'];
  $customersql = "SELECT customer_id FROM `customer` WHERE email='$customeremail' ";
  $result = $conn->query($customersql);
  if($result->num_rows>0){
    while($row = $result-> fetch_assoc())
  {
     $customerid = $row['customer_id']; 
    }
  }
  
  $sql ="INSERT INTO `order` (`id`, `orderlist`, `customer_id`, `payment_method`, `shipment_address`, `shipment_done`, `date`) VALUES (NULL, '$orderlist', '$customerid', 'paypal', '$ship_address', '0', '2015-05-07 00:00:00');;";
    if($conn->query($sql) == TRUE)
    {
    echo '<br><div style="padding: 5px; color:red">We have received your order. You will be notified Soon.</div></br>';
  }
  else
    {
    echo "something is wrong";

  }
}
  else{
     echo "Access Denied";
  }
}

require_once($_SERVER['DOCUMENT_ROOT'].'/footer.php');
  ?>
</div>