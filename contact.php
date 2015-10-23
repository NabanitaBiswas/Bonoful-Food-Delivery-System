<?php require_once('admin/connection.php');?>
<!DOCTYPE html>
 <html>
   <head>
   <title> Banoful And Co|contact</title>
   </head>
   
    <body>
      <?php require_once('header.php') ?>
      <div>
        <h1>Contact with us for any help </h1><br />
		 <form action="contactaction.php" method="POST">
	    Username:&nbsp; &nbsp; <input type="text" name="username"  size=""  value=" " maxlength="50" /><br /><br />
        Email:&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<input type="text" name="email"  size=""  value=" " maxlength="50" /><br /><br />
       
		Comment:&nbsp; &nbsp;<textarea rows="4" cols="50" name="comment"  size="" value=" " maxlength="" > </textarea> <br /><br />
		
	
		<input type="submit" name="submit" value="submit"/>
       </div>
        <?php require_once('footer.php') ?>
   </body>
</html>