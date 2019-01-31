<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Password Reset</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	
  	<div class="input-group">
  	    <div class ="register-title">
  	        <h2 align="left" class="mb-2">Forgotten your password?</h2>
  	    </div>
  	    
  	    <div class="email-text">
  	    	<p><b>Enter your email address</b> and we will send you details on how to reset your password.</p>    
  	    </div>
  		<input type="text" placeholder="Email Address"name="Email Address" required>
  	</div>
  	
  	<div class="input-group-email">
  		<button type="submit" class="btn" name="login_user">Send Password</button>
  			<p>
  		Not yet a member? <a href="register.php">Join!</a>
      	</p>
  		</div>
  		
  		<div class ="help-btn">
  		  <button type="submit" class="btn" name="help">Help!</button>
  		</div>
  	       </form>
    
  </form>
</body>
</html>