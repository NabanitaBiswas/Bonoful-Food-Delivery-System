<!DOCTYPE html>
<html>
  <head>
  <title> Banoful And Co|Signin</title> 
  <head/>
<body>

  <?php require_once('header.php') ?>
  
<div style = "float: center;" >
<h1>Login</h1><br />
		 <form action="checklogin.php" method="POST">	
	    
		E-mail:&nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="email"  size="50" value="" maxlength="50" /><br /><br />
		Password:&nbsp; &nbsp; <input type="password" name="password"  size="50" value="" maxlength="30" /><br /><br />
		&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
		<input type="submit" name="login" value="Login"/>
  </form>
  </div>
   <?php require_once('footer.php') ?>
</body>
</html>