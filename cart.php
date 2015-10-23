<?php require_once('header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/admin/connection.php'); ?>
	<section id="cart_items">
    <h2>You have added this item on cart</h2>
			<div class="table-responsive cart_info">
<?php	 $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	if(isset($_SESSION["products"]))
    {
	    $total = 0;
		echo '<form method="post" action="paymentprocess.php">';
		echo '<ul>';
		$cart_items = 0;
    $orderlist = "";
		foreach ($_SESSION["products"] as $cart_itm)
        {
       $orderlist= $orderlist.'<div>Product Code'.$cart_itm["code"].' and Quantity '.$cart_itm["qty"].'</div><br>';
       $product_code = $cart_itm["code"];
		   $results = $conn->query("SELECT product_name,product_desc, price FROM products WHERE product_code='$product_code' LIMIT 1");
		   $obj = $results->fetch_object();
		   
		  echo '<li class="cart-itm">';
			echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
			echo '<div class="p-price">'.$currency.$obj->price.'</div>';
            echo '<div class="product-info">';
			echo '<h3>'.$obj->product_name.' (Code :'.$product_code.')</h3> ';
            echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
            echo '<div>'.$obj->product_desc.'</div>';
			echo '</div>';
            echo '</li>';
			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			$total = ($total + $subtotal);

			echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->product_name.'" />';
			echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
			echo '<input type="hidden" name="item_desc['.$cart_items.']" value="'.$obj->product_desc.'" />';
			echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
			$cart_items ++;
	
        }
    	
    	echo '</ul>';
    echo '<input type="hidden" name="orderlist" value="'.$orderlist.'" />';
		echo '<span class="check-out-txt">';
		echo '<strong>Total : '.$currency.$total.'</strong><br>  ';
		echo 'Shipment Address: <textarea maxlength="" value=" " size="" name="ship_address" cols="50" rows="4"> </textarea><br>'; ?>
    
    <?php  if(isset($_SESSION['user_email'])) {
       echo '<input class="btn btn-default check_out" type="submit"></span>';
       }
    else
      {
      
       echo '<br><div style="color:red">You have not logged in. Please login to submit the order</div>';
       
    }
     ?>   
    
	<?php
    echo '</form>';
		
    }else{
		echo 'Your Cart is empty';
	}
	
    ?>
			</div>
		</div>
	</section> <!--/#cart_items-->



<?php require_once('footer.php') ?>