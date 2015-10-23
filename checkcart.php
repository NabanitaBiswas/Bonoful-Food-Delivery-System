<?php require_once('header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/connection.php'); ?>

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
echo '<li class="cart-itm">';
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
</div><!--/category-products-->
<?php require_once('footer.php') ?>