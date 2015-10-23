<?php
session_start();
include_once("cart/connection.php");
?>

<!DOCTYPE html>
<!--header part of banoful-->
<html>
<head>
	<meta charset="UTF-8" />
	<title>Banoful And Co.</title>
	<link rel="stylesheet" type="text/css" href="cart/style.css" />
	
</head>
<body>
	<?php require_once('header.php') ?>
	 
 
	          	
			<div id="products-wrapper">
    <h1> Other Desserts </h1>
         <form action="cart8/index.php">
						<h2> Order to get  at  your doorstep. </h2><input type="submit" value="Order Here"  />
					</form>
      
    <div class="products">
    <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $conn->query("SELECT * FROM products WHERE category_id='9' ORDER BY id ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="product">'; 
            echo '<form method="post" action="sweets.php">';
			echo '<div class="product-thumb"><img src="cart8/images/'.$obj->product_img_name.'"></div>';
            echo '<div class="product-content"><h3>'.$obj->product_name.'</h3>';
            echo '<div class="product-desc">'.$obj->product_desc.'</div>';
            echo '<div class="product-info">';
			echo 'Price '.$currency.$obj->price.' | ';
            
			
			echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->product_code.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    
    }
    ?>
    </div>
	</div>
	
	
  <?php require_once('footer.php') ?>
</body>
</html>