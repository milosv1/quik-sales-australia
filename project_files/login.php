<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Quik-Sales Australia Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
  <div class="header">
  	<h2 align="center"></a>Sign In</h2>
  </div>
	 
  <form method="post" action="server.php">
   <?php include('errors.php'); ?>  
  	
  	<div class="col-auto">
  	  
  	  
  	  
  	
  	<div class="input-group" style="margin-left:100px">
  		<label>Email Address</label>
  		<input type="text" placeholder="Email Address"name="email" required>
  	</div>
  	<div class="input-group" style="margin-left:100px">
  	  
  		<label>Password</label>
  		  	<input type="password"  placeholder="Password" name="password" required>
  		</div>
  	
  		
  		<div class="forgotten-password-link">
  			<p>
  		 <a href="forgottenpassword.php">Forgot your password?</a>
  		</p>
  		</div>
  	</div>
  	<div class="input-group-btn-sign-in">
  		<button type="submit" class="btn" name="login_user">Sign In</button>
  		
  		<div class="not-member-text">
  		  	<p>
  		Not yet a member? <a href="register.php">Join!</a>
      	</p>
  		  
  		</div>
  		
  		</div>
  		
  		
  		<div class ="help-btn">
  		  <button type="submit" class="btn"  name="help">Help!</button>
  		  
  		</div>
    
  </form>
</body>
</html>