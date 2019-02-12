<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Quik-Sales Australia Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
     <h2 align="center"></a>Create an account</h2>
  	 </div>
	<div class="container-fluid">
	  <div class="row">
  <form method="post" action="server.php"id="server" class="col-md-4 offset-md-4">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	    <!--<h2 align="center">Create an account</h2> -->
  	  <input type="text"name="firstname" placeholder="First Name" value="<?php echo $firstname; ?>">
  	</div>
  	<div class="input-group">
  
  	  <input type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	 
  	  <input type="password" placeholder="Password" name="password">
  	</div>
  	
  	<div class="input-group-btn">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	
  	<div class="join-text-group">
  	  <p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  	</div>
  	<div class ="help-btn">
  		  <button type="submit" class="btn" name="help">Help!</button>
  		  
  		</div>
  </form>
 
</body>
</html>