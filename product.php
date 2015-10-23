<?php require_once('header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/connection.php'); 

$catid = $_GET['catid'];
?>
 
<div class="shopping-cart">
<h2>Your Shopping Cart</h2>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/connection.php');
$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
if(isset($_SESSION["products"]))
{
$total = 0;
echo '<ol>';
foreach ($_SESSION["products"] as $cart_itm)
{
echo '<li class="cart-itm-product">';
echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
echo '<h3>'.$cart_itm["name"].'</h3>';
echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
echo '</li>';
$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
$total = ($total + $subtotal);
}
echo '';
echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong><br> <a href="cart.php">Check-out!</a></span>';
echo '<span class="empty-cart"><br><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span></ol>';
}else{
echo 'Your Cart is empty';
}
?>
</div>
<!--/category-products-->
</br>
<div style="clear:both"> </div>
<h2>Our Products</h2> 

 <?php
$results = $conn->query("SELECT * FROM products where category_id='$catid' ORDER BY id ASC");
if ($results) {
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
?>
<form action="cart_update.php" method="post" >
<div class="col-sm-4">
<div class="product-image-wrapper">
<div class="single-products">
<div class="productinfo text-center">
<img src="productimage/<?php echo $obj->product_img_name ?>" alt="" />
<h2><?php echo $obj->product_name ?></h2>
<p><?php echo $obj->price ?></p>
  <p><?php echo 'Qty <input type="text" name="product_qty" value="1" size="3" />'; ?>
<button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</div>
<div class="product-overlay">
<div class="overlay-content">


</div>
</div>
</div>
<div class="choose">
<ul class="nav nav-pills nav-justified">

</ul>
</div>
</div>
</div>
<?php
echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
echo '<input type="hidden" name="type" value="add" />';
echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
?>
</form>
<?php
}
}
?>
</div><!--features_items-->
	
  <?php require_once('footer.php') ?>
