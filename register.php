
<!DOCTYPE html>
 <html>
   <head>
   <title> Banoful And Co|Sign up</title>
   </head>
   
    <body>
      <?php require_once('header.php') ?>
      <div>
         <h1>Register</h1><br />
		 <form action="regaction.php" method="POST">
	    Username:&nbsp;  <input type="text" name="customer_name"  size="50" value="user name" maxlength="50"         /><br /><br />
		E-mail:&nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="email"  size="50" value="your email"
                                              maxlength="50" /><br /><br />
		Address:&nbsp; &nbsp; &nbsp; <input type="text" name="address" size="50" value="address"	maxlength="50" /><br /><br />
		Birthday:&nbsp; &nbsp;
    <input type="text" name="birthday" size="50" value="1980-01-01">   
       <br /> <br />
		Password:&nbsp; <input type="password" name="pass"  size="50" value="" maxlength="30" /><br /><br />
		Sex:&nbsp; &nbsp; &nbsp; &nbsp; Male<input type="radio" name="sex" value="male"/>
		                                Female<input type="radio" name="sex" value="female"/> <br /><br />   
		&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
		<input type="submit" name="submit" value="submit"/>
  </div>
        <?php require_once('footer.php') ?>
   </body>
</html>