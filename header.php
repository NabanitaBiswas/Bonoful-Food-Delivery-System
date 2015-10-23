<html>
<head>
<title> Banoful And Co</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
   <div id="header">
		<div>
			<div>
				<div id="logo">
					<a href="index.php"><img src="images/Logo.png" alt="Logo"/></a>
				</div>
				<div>
					<div>
						
						
						
            <?php
       session_start(); 
       if(isset($_SESSION['user_email'])) {
       echo 'You are logged in';
       ?>
  
       <a href="logout.php">Logout</a>
       <?php

       }
      else { ?>
      <a href="login.php">Sign in</a>
       <a href="register.php">Sign up</a>
     <?php
     } ?>
  


						<a href="http://facebook.com" target="_blank" class="facebook">Facebook</a>
						<a href="http://twitter.com" target="_blank" class="twitter">Twitter</a>
						<a href="#" class="subscribe">Subscribe</a>
						<a href="contact.php">Help</a>
					</div>
					
					
					<form action="sweets.php">
						<input type="text" id="search" maxlength="30" />
						<input type="submit" value="" id="searchbtn" />
					</form>
				</div>
			</div>
			<ul>
				<li class="current"><a href="/index.php">Home</a></li>
				<li><a href="/about.php">About us</a></li>
				<li><a href="/businessType.php">Business Type</a></li>
				<li><a href="/services.php">Services</a></li>
				<li><a href="/checkcart.php">Cart</a></li>
				<li><a href="/contact.php">Contact Us</a></li>
			</ul>
			<div id="section">
				<ul>
					<li class="selected"><a href="product.php?catid=1">Sweets</a></li>
					<li><a href="product.php?catid=2">Cakes</a></li>
					<li><a href="product.php?catid=3">Biscuits</a></li>
					<li><a href="product.php?catid=4">chanachur</a></li>
					<li ><a href="product.php?catid=5">fast food</a></li>
					<li><a href="product.php?catid=6">bread</a></li>
					<li><a href="product.php?catid=7">semai</a></li>
					<li><a href="product.php?catid=8">noodles</a></li>
					<li><a href="product.php?catid=9">other desserts</a></li>
				</ul>
				<a href="index.php"><img src="images/1.gif" alt="Image"/></a> <br /><br /><br/>
				
			</div>
		</div>
	</div>
<div style="margin: 0 auto; width:74%">