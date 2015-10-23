<?php require_once('connection.php'); ?>
<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta name="robots" content="noindex,nofollow" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" /> <!-- RESET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" /> <!-- MAIN STYLE SHEET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/2col.css" title="2col" /> <!-- DEFAULT: 2 COLUMNS -->
	<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="css/1col.css" title="1col" /> <!-- ALTERNATE: 1 COLUMN -->
	<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]--> <!-- MSIE6 -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" /> <!-- GRAPHIC THEME -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/mystyle.css" /> <!-- WRITE YOUR CSS CODE HERE -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/switcher.js"></script>
	<script type="text/javascript" src="js/toggle.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.tabs.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".tabs > ul").tabs();
	});
	</script>
	<title>Banoful And Co</title>
</head>

  <body>
    
     <?php require_once('header.php') ?>
    
        <div align="centered">
         <h1>Add Product</h1><br />
		 <form action="productaction.php" method="POST">
	    Product Name:&nbsp; &nbsp; <input type="text" name="product_name"  size="50" value="" maxlength="50" /><br /><br />
       Product Code:&nbsp; &nbsp; <input type="text" name="product_code"  size="50" value="" maxlength="50" /><br /><br />
			Description:&nbsp; &nbsp; &nbsp; &nbsp; <textarea rows="4" cols="50" name="product_desc"  size="" value=" " maxlength="" > </textarea> <br /><br />
       Product img Name:&nbsp; &nbsp; <input type="text" name="product_image_name"  size="50" value=" " maxlength="50" /><br /><br />
		Price per Kg:&nbsp; &nbsp; &nbsp; <input type="text" name="price" rows="3" cols="50"></input><br /><br />
<?php
  $sql = "SELECT * FROM `category`";
$result = $conn->query($sql);

if ($result->num_rows > 0) { ?>
Category:<select name="category">
  <?php
    while($row = $result->fetch_assoc()) { ?>
  <option value='<?php echo $row["id"]?>'><?php echo $row["name"]?></option>
  <?php
    } ?>
  </select>
  <?php
} else {
    echo "0 results";
}
  ?>
   </br>    </br>
		<input type="submit" name="submit" value="submit"/>
    </div>


 <?php require_once('footer.php') ?>
</body>

</html>